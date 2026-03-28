<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{
    public $user_id;
    public $name;
    public $email;
    public $role;
    public function mount($user)
    {
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->role;
    }

    public function render()
    {

        return view('livewire.users.edit-user');
    }

    public function update()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->user_id,
            'role' => 'required|in:admin,pegawai',
        ];
        $this->validate($rules);

        User::where('id', $this->user_id)->update([
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role,
        ]);

        $this->reset();

        flash('User Berhasil Diupdate', 'success');
        return redirect()->route('users');
    }
}
