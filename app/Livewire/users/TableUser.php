<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class TableUser extends Component
{
    use WithPagination;
    public function render()
    {

        return view('livewire.users.table-user', [
            'users' => User::orderBy('id', 'desc')->paginate(10)
        ]);
    }
}
