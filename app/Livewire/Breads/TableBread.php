<?php

namespace App\Livewire\Breads;

use App\Models\Bread;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class TableBread extends Component
{
    use WithPagination;
    public $search = '';
    public $bread_id;

    public function render()
    {

        return view('livewire.breads.table-bread', [
            'breads' => Bread::orderBy('id', 'desc')->whereAny(['name'], 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteConfirm($id)
    {
        $this->bread_id = $id;

        $this->dispatch('deleteConfirm', ['trigger' => 'breadDelete']);
    }
    #[On('breadDelete')]
    public function delete()
    {
        $bread = Bread::find($this->bread_id);
        if ($bread->image) {
            Storage::disk('public')->delete($bread->image);
        }
        DB::statement("SET @current_user_email = ?", [Auth::user()->email]);
        $bread->delete();

        $this->dispatch("alert", ['type' => 'success', 'message' => "Roti Berhasil dihapus"]);
    }
}
