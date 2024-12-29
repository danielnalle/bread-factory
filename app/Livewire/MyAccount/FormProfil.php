<?php

namespace App\Livewire\MyAccount;

use App\Models\Customer;
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
    public $prevPhone;
    public $address;
    public $prevAddress;

    public function render()
    {

        $user = User::find(Auth::user()->id);
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->prevEmail = $user->email;
        $this->prevPhone = $user->customer != NULL ? $user->customer->phone : NULL;
        $this->prevAddress = $user->customer != NULL ? $user->customer->address : NULL;
        $this->phone = $this->prevPhone;
        $this->address = $this->prevAddress;
        return view('livewire.my-account.form-profil');
    }

    public function update()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->user_id,
        ];
        if (Auth::user()->role == 'customer') {
            $rules['phone'] = 'required|regex:/^[0-9]{10,15}$/|unique:customers,phone, ' . $this->user_id . ',user_id';
            $rules['address'] = 'required|string|max:600';
        }
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
        if (Auth::user()->role == 'customer') {
            if ($this->prevPhone) {
                $user->customer->update([
                    'phone' => $this->phone,
                    'address' => $this->address,
                ]);
            } else {
                Customer::create([
                    'user_id' => $this->user_id,
                    'phone' => $this->phone,
                    'address' => $this->address,
                ]);
            }
        }

        flash('Profil Berhasil Diupdate', 'success');
        return redirect()->route('my-account.account');
    }
}
