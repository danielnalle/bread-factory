<?php

namespace App\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProduct extends Component
{
    use WithFileUploads;
    public $product_id, $name, $description, $category, $quantity, $min_order, $price, $image, $prevImage, $path;
    public function mount($product)
    {
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->category = $product->bread_type_id;
        $this->quantity = $product->quantity;
        $this->min_order = $product->min_order;
        $this->price = $product->price;
        $this->prevImage = $product->image;
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.products.edit-product', ['categories' => $categories]);
    }

    public function update()
    {
        $rules = [
            'name' => 'required|string|max:255|unique:breads,name,' . $this->product_id,
            'description' => 'required|string|max:600',
            'category' => 'required|exists:bread_types,id',
            'quantity' => 'required|integer|min:1',
            'min_order' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ];

        if ($this->image) {
            $rules['image'] = 'required|image|mimes:jpg,jpeg,png|max:2048';
        }

        $this->validate($rules);
        if ($this->image) {
            $this->path = $this->image->store('products', 'public');
            if ($this->path && $this->image) {
                if ($this->prevImage) {
                    Storage::disk('public')->delete($this->prevImage);
                }
            }
        }
        $updated = [
            'name' => $this->name,
            'description' => $this->description,
            'bread_type_id' => $this->category,
            'quantity' => $this->quantity,
            'min_order' => $this->min_order,
            'price' => $this->price,
            'image' => $this->path ? $this->path : $this->prevImage,
            'updated_at' => now(),
        ];

        DB::statement("SET @current_user_email = ?", [Auth::user()->email]);

        Product::where('id', $this->product_id)->update($updated);




        $this->reset();

        flash('Product Berhasil Diupdate', 'success');
        return redirect()->route('products');
    }
}
