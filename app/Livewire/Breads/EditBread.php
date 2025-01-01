<?php

namespace App\Livewire\Breads;

use App\Models\BreadType;
use App\Models\Bread;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditBread extends Component
{
    use WithFileUploads;
    public $bread_id, $name, $description, $bread_type, $quantity, $min_order, $price, $image, $prevImage, $path, $unit;
    public function mount($bread)
    {
        $this->bread_id = $bread->id;
        $this->name = $bread->name;
        $this->description = $bread->description;
        $this->bread_type = $bread->bread_type_id;
        $this->quantity = $bread->quantity;
        $this->min_order = $bread->min_order;
        $this->unit = $bread->unit;
        $this->price = $bread->price;
        $this->prevImage = $bread->image;
    }

    public function render()
    {
        $bread_types = BreadType::all();
        return view('livewire.breads.edit-bread', ['bread_types' => $bread_types]);
    }

    public function update()
    {
        $rules = [
            'name' => 'required|string|max:255|unique:breads,name,' . $this->bread_id,
            'description' => 'required|string|max:600',
            'bread_type' => 'required|exists:bread_types,id',
            'quantity' => 'required|integer|min:1',
            'min_order' => 'required|integer|min:1',
            'unit' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ];

        if ($this->image) {
            $rules['image'] = 'required|image|mimes:jpg,jpeg,png|max:2048';
        }

        $this->validate($rules);
        if ($this->image) {
            $this->path = $this->image->store('breads', 'public');
            if ($this->path && $this->image) {
                if ($this->prevImage) {
                    Storage::disk('public')->delete($this->prevImage);
                }
            }
        }
        $updated = [
            'name' => $this->name,
            'description' => $this->description,
            'bread_type_id' => $this->bread_type,
            'quantity' => $this->quantity,
            'min_order' => $this->min_order,
            'unit' => $this->unit,
            'price' => $this->price,
            'image' => $this->path ? $this->path : $this->prevImage,
            'updated_at' => now(),
        ];

        DB::statement("SET @current_user_email = ?", [Auth::user()->email]);

        Bread::where('id', $this->bread_id)->update($updated);

        $this->reset();

        flash('Roti Berhasil Diupdate', 'success');
        return redirect()->route('breads');
    }
}
