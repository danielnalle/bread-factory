<?php

namespace App\Livewire\BreadTypes;

use App\Models\BreadType;
use Livewire\Component;

class EditBreadType extends Component
{
    public $bread_type_id;
    public $name;
    public $isActive;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:bread_types,name, ' . $this->bread_type_id,
            'isActive' => 'required|boolean',
        ];
    }
    public function mount($bread_type)
    {
        $this->bread_type_id = $bread_type->id;
        $this->name = $bread_type->name;
        $this->isActive = $bread_type->isActive;
    }

    public function render()
    {

        return view('livewire.bread_types.edit-bread-type');
    }

    public function update()
    {
        $this->validate();

        BreadType::where('id', $this->bread_type_id)->update([
            'name' => $this->name,
            'isActive' => $this->isActive,
        ]);

        $this->reset();

        flash('Jenis Roti Berhasil Diupdate', 'success');
        return redirect()->route('bread_types');
    }
}
