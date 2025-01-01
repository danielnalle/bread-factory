<?php

namespace App\Livewire\Landing;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ListProduct extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedCategory = '';

    public function render()
    {
        $totalProducts = Product::count();
        $categories = Category::all();
        return view('livewire.landing.list-product', [
            // 'products' => Product::orderBy('id', 'desc')->whereAny(['name'], 'like', '%' . $this->search . '%')->paginate($totalProducts)
            'products' => Product::orderBy('id', 'desc')->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })->when($this->selectedCategory, function ($query) {
                $query->where('bread_type_id', $this->selectedCategory);
            })->paginate($totalProducts),
            'categories' => $categories,
        ]);
    }

    public function searching()
    {
        $this->resetPage();
    }

    public function filter($category)
    {
        $this->selectedCategory = $category;
        $this->resetPage();
    }
}
