<?php

namespace App\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{
    use WithFileUploads;

    public $name, $description, $category, $quantity, $min_order, $price, $image;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:breads,name',
            'description' => 'required|string|max:600',
            'category' => 'required|exists:bread_types,id',
            'quantity' => 'required|integer|min:1',
            'min_order' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|max:2048', // Max 2MB
        ];
    }

    public function removeImage()
    {
        $this->image = null; // Menghapus file yang diunggah
    }

    public function save()
    {
        $this->validate();

        if ($this->image) {
            $path = $this->image->store('products', 'public');
        }


        DB::statement("SET @current_user_email = ?", [Auth::user()->email]);
        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'bread_type_id' => $this->category,
            'quantity' => $this->quantity,
            'min_order' => $this->min_order,
            'price' => $this->price,
            'image' => $path,
        ]);



        $this->reset();
        flash('Product berhasil ditambah', 'success');
        return redirect()->route('products');
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.products.create-product', ['categories' => $categories]);
    }
}
