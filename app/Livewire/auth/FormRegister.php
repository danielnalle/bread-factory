<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FormRegister extends Component
{
    public $username, $email, $password;
    public function render()
    {
        return view('livewire.auth.form-register');
    }

    protected function rules()
    {
        return [
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ];
    }

    public function registerUser()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->username,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        return redirect()->route('login');
    }
}
