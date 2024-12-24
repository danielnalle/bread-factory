<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditCategory extends Component
{
    public $category_id;
    // #[Validate('required|string|max:255|unique:bread_types,name', onUpdate: false)]
    public $name;
    // #[Validate('required|boolean')]
    public $isActive;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:bread_types,name, ' . $this->category_id,
            'isActive' => 'required|boolean',
        ];
    }
    public function mount($category)
    {
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->isActive = $category->isActive;
    }

    public function render()
    {

        return view('livewire.categories.edit-category');
    }

    public function update()
    {
        $this->validate();

        Category::where('id', $this->category_id)->update([
            'name' => $this->name,
            'isActive' => $this->isActive,
        ]);

        $this->reset();

        flash('Kategori Berhasil Diupdate', 'success');
        return redirect()->route('categories');
    }
}
