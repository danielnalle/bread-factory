<?php

namespace App\Livewire\BreadTypes;

use App\Models\BreadType;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class TableBreadType extends Component
{
    use WithPagination;
    public $search = '';
    public $bread_type_id;

    public function render()
    {

        return view('livewire.bread_types.table-bread-type', [
            'bread_types' => BreadType::orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteConfirm($id)
    {
        $this->bread_type_id = $id;


        $this->dispatch('deleteConfirm', ['trigger' => 'BreadTypeDelete']);
    }
    #[On('BreadTypeDelete')]
    public function delete()
    {
        $bread_type = BreadType::find($this->bread_type_id);
        $bread_type->delete();

        $this->dispatch("alert", ['type' => 'success', 'message' => "Jenis Roti Berhasil Dihapus"]);
    }
}
