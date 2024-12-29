<?php

namespace App\Livewire\MyAccount;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FormProfil extends Component
{
    public $user_id;
    public $name;
    public $email;
    public $phone;
    public $prevEmail;

    public function render()
    {

        $user = User::find(Auth::user()->id);
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->prevEmail = $user->email;
        $this->phone = $user->customer->phone;
        return view('livewire.my-account.form-profil');
    }

    public function update()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->user_id,
            'phone' => 'required|required|regex:/^[0-9]{10,15}$/|unique:customers,phone, ' . $this->user_id . ',user_id',
        ];
        $this->validate($rules);

        $user = User::find($this->user_id);

        $updated = [
            'name' => $this->name,
            'email' => $this->email,
        ];

        if ($this->email != $this->prevEmail) {
            $updated['email_verified_at'] = NULL;
        };
        $user->update($updated);
        $user->customer->update([
            'phone' => $this->phone,
        ]);

        flash('Profil Berhasil Diupdate', 'success');
        return redirect()->route('my-account.account');
    }
}
