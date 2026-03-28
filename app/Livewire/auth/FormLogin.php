<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Component;

class FormLogin extends Component
{
    public $email, $password, $remember;
    public function render()
    {
        return view('livewire.auth.form-login');
    }

    protected function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    public function loginUser()
    {
        $this->validate();


        $decaySeconds = 300; // Format detik, misal 300 detik = 5 menit
        $throttleKey = strtolower($this->email) . '|' . request()->ip();
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $secondsRemaining = RateLimiter::availableIn($throttleKey);
            $minutesRemaining = ceil($secondsRemaining / 60); // Konversi ke menit
            flash('Login dengan password dinonaktifkan selama ' . $minutesRemaining . ' menit. Silahkan coba lagi nanti');
            return null;
        }
        if (!Auth::attempt($this->only(['email', 'password']), $this->remember)) {
            RateLimiter::hit($throttleKey, $decaySeconds);
            // $this->addError('email', __('auth.failed'));
            flash('Email atau password salah, silahkan coba lagi');
            return null;
        }

        $role = Auth::user()->role; // Pastikan kolom 'role' tersedia di tabel users

        // Arahkan berdasarkan role
        if ($role === 'customer') {
            return redirect()->route('landing-page');
        } elseif (in_array($role, ['admin', 'pegawai'])) {
            return redirect()->route('dashboard');
        }

        // Default redirect jika role tidak sesuai
        return redirect()->route('landing-page');
    }
}
