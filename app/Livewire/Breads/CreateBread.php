<?php

namespace App\Livewire\Breads;

use App\Models\BreadType;
use App\Models\Bread;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBread extends Component
{
    use WithFileUploads;

    public $name, $description, $bread_type, $quantity, $min_order, $price, $image, $unit;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:breads,name',
            'description' => 'required|string|max:600',
            'bread_type' => 'required|exists:bread_types,id',
            'quantity' => 'required|integer|min:1',
            'min_order' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'unit' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Max 2MB
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
            $path = $this->image->store('breads', 'public');
        }


        DB::statement("SET @current_user_email = ?", [Auth::user()->email]);
        Bread::create([
            'name' => $this->name,
            'description' => $this->description,
            'bread_type_id' => $this->bread_type,
            'quantity' => $this->quantity,
            'min_order' => $this->min_order,
            'unit' => $this->unit,
            'price' => $this->price,
            'image' => $path,
        ]);



        $this->reset();
        flash('Roti berhasil ditambah', 'success');
        return redirect()->route('breads');
    }
    public function render()
    {
        $bread_types = BreadType::where('isActive', '1')->get();
        return view('livewire.breads.create-bread', ['bread_types' => $bread_types]);
    }
}
