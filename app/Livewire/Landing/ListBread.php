<?php

namespace App\Livewire\Landing;

use App\Models\BreadType;
use App\Models\Bread;
use Livewire\Component;
use Livewire\WithPagination;

class ListBread extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedBreadType = '';
    public $selectedBreadTypeName = 'Semua Roti';

    public function render()
    {
        $totalBreads = Bread::count();
        $bread_types = BreadType::where('isActive', '1')->get();
        return view('livewire.landing.list-bread', [
            // 'Breads' => Bread::orderBy('id', 'desc')->whereAny(['name'], 'like', '%' . $this->search . '%')->paginate($totalBreads)
            'breads' => Bread::select('breads.*')
                ->join('bread_types', 'bread_types.id', '=', 'breads.bread_type_id')
                ->where('bread_types.isActive', '1')->whereColumn('quantity', '>', 'min_order')
                ->orderBy('breads.id', 'desc')->when($this->search, function ($query) {
                    $query->where('breads.name', 'like', '%' . $this->search . '%');
                })->when($this->selectedBreadType, function ($query) {
                    $query->where('breads.bread_type_id', $this->selectedBreadType);
                })->paginate($totalBreads),
            'bread_types' => $bread_types,
            'selectedBreadTypeName' => $this->selectedBreadTypeName,
        ]);
    }

    public function searching()
    {
        $this->resetPage();
    }

    public function filter($value)
    {
        $this->selectedBreadType = $value;
        if ($value != '') {
            $this->selectedBreadTypeName = BreadType::find($value)->name;
        } else {
            $this->selectedBreadTypeName = "Semua Roti";
        }
        $this->resetPage();
    }
}
