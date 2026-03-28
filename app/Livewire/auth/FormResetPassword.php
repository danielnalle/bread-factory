<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use Livewire\Component;
use Illuminate\Support\Str;

class FormResetPassword extends Component
{
    public $email, $password, $password_confirmation, $token;
    protected function rules()
    {
        return [
            'token' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ];
    }

    public function mount(string $token, string $email)
    {
        $this->token = $token;
        $this->email = $email; // Set email dari token
    }

    public function resetPassword()
    {
        $this->validate();

        $status = Password::reset(
            [
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation,
                'token' => $this->token,
            ],
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => bcrypt($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );
        if ($status === Password::PASSWORD_RESET) {
            flash('Password berhasil direset', 'success');
            return redirect()->route('login');
        } else {
            flash('Password gagal direset Please try again.', 'error');
            return redirect()->back();
        }
    }
    public function render()
    {
        return view('livewire.auth.form-reset-password');
    }
}
