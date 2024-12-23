<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class TableUser extends Component
{
    use WithPagination;
    public $search = '';
    public $user_id;

    public function render()
    {

        return view('livewire.users.table-user', [
            'users' => User::orderBy('id', 'desc')->where('role', '!=', 'customer')->whereAny(['name', 'email'], 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteConfirm($id)
    {
        $this->user_id = $id;

        // $user->delete();

        // session()->flash('message', 'Data berhasil dihapus.');
        $this->dispatch('deleteConfirm', ['user' => 'userDelete']);
    }
    #[On('userDelete')]
    public function delete()
    {
        $user = User::find($this->user_id);
        $user->delete();

        $this->dispatch("alert", ['type' => 'success', 'message' => "User Berhasil dihapus"]);
    }
}
