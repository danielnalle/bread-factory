<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class TableProduct extends Component
{
    use WithPagination;
    public $search = '';
    public $product_id;

    public function render()
    {

        return view('livewire.products.table-product', [
            'products' => Product::orderBy('id', 'desc')->whereAny(['name'], 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteConfirm($id)
    {
        $this->product_id = $id;

        $this->dispatch('deleteConfirm', ['trigger' => 'productDelete']);
    }
    #[On('productDelete')]
    public function delete()
    {
        $product = Product::find($this->product_id);
        $product->delete();

        $this->dispatch("alert", ['type' => 'success', 'message' => "Product Berhasil dihapus"]);
    }
}
