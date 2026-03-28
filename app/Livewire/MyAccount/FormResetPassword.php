<?php

namespace App\Livewire\MyAccount;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class FormResetPassword extends Component
{
    public $user;
    public $currPass;
    public $password;
    public $password_confirmation;

    public function render()
    {

        $user = User::find(Auth::user()->id);
        $this->user = $user;
        return view('livewire.my-account.form-reset-password');
    }

    public function save()
    {
        $rules = [
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ];
        if ($this->user->password) {
            $rules['currPass'] = 'required';
        }
        $this->validate($rules);

        if ($this->user->password) {
            // Verifikasi password lama
            if (!Hash::check($this->currPass, $this->user->password)) {
                flash('Password lama tidak sesuai', 'error');
                return redirect()->route('my-account.account');
            }
        }

        $this->user->update([
            'password' => bcrypt($this->password),
        ]);
        $this->reset();
        flash('Password Berhasil Diupdate', 'success');
        return redirect()->route('my-account.account');
    }
}
