<?php

namespace App\Livewire\BreadTypes;

use App\Models\BreadType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateBreadType extends Component
{
    #[Validate('required|string|max:255|unique:bread_types,name')]
    public $name;
    #[Validate('boolean')]
    public $isActive = false;

    public function render()
    {
        return view('livewire.bread_types.create-bread-type');
    }

    public function store()
    {
        $this->validate();

        BreadType::create([
            'name' => $this->name,
            'isActive' => $this->isActive,
        ]);

        flash("Jenis Roti Berhasil Ditambah", "success");
        return redirect()->route('bread_types');
    }
}
