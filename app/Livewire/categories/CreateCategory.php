<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateCategory extends Component
{
    #[Validate('required|string|max:255|unique:bread_types,name')]
    public $name;
    #[Validate('required|boolean')]
    public $isActive;

    public function render()
    {
        return view('livewire.categories.create-category');
    }

    public function store()
    {
        $this->validate();

        Category::create([
            'name' => $this->name,
            'isActive' => $this->isActive,
        ]);

        flash("Kategori Berhasil Ditambah", "success");
        return redirect()->route('categories');
    }
}
