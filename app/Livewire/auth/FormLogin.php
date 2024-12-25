<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
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

        if (!Auth::attempt($this->only(['email', 'password']), $this->remember)) {
            // $this->addError('email', __('auth.failed'));
            flash('Email atau password salah, silahkan coba lagi');
            return null;
        }

        return redirect()->route('landing-page');
    }
}
