<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class TableCategory extends Component
{
    use WithPagination;
    public $search = '';
    public $category_id;

    public function render()
    {

        return view('livewire.categories.table-category', [
            'categories' => Category::orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteConfirm($id)
    {
        $this->category_id = $id;


        $this->dispatch('deleteConfirm', ['trigger' => 'categoryDelete']);
    }
    #[On('categoryDelete')]
    public function delete()
    {
        $category = Category::find($this->category_id);
        $category->delete();

        $this->dispatch("alert", ['type' => 'success', 'message' => "Kategori Berhasil Dihapus"]);
    }
}
