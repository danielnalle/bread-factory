<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class TableUser extends Component
{
    use WithPagination;
    public $search = '';
    protected $listeners = ['delete'];
    public $user_id;

    public function render()
    {

        return view('livewire.users.table-user', [
            'users' => User::orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->orWhere('email', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function delete($id)
    {
        // $this->user_id = $id;
        $user = User::find($id);
        $user->delete();

        session()->flash('message', 'Data berhasil dihapus.');
    }
}
