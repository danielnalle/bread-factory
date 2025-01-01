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

    public function render()
    {
        $totalBreads = Bread::count();
        $bread_types = BreadType::all();
        return view('livewire.landing.list-bread', [
            // 'Breads' => Bread::orderBy('id', 'desc')->whereAny(['name'], 'like', '%' . $this->search . '%')->paginate($totalBreads)
            'breads' => Bread::orderBy('id', 'desc')->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })->when($this->selectedBreadType, function ($query) {
                $query->where('bread_type_id', $this->selectedBreadType);
            })->paginate($totalBreads),
            'bread_types' => $bread_types,
        ]);
    }

    public function searching()
    {
        $this->resetPage();
    }

    public function filter($value)
    {
        $this->selectedBreadType = $value;
        $this->resetPage();
    }
}
