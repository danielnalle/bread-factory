<?php

namespace App\Livewire\Landing;

use App\Models\Bread;
use Livewire\Component;

class DetailBread extends Component
{
    public $bread;
    public $amount;
    public function mount($bread)
    {
        $this->bread = $bread;
        $this->amount = $bread->min_order;
    }
    public function render()
    {
        return view('livewire.landing.detail-bread', [
            'bread' => $this->bread,
            'similar' => Bread::where('bread_type_id', $this->bread->bread_type_id)->where('id', '!=', $this->bread->id)->orderBy('id', 'desc')->limit(4)->get()
        ]);
    }

    public function increment()
    {
        $this->amount++;
    }

    public function decrement()
    {
        if ($this->amount > $this->bread->min_order) {
            $this->amount--;
        } else {
            $this->amount = $this->bread->min_order;
        }
    }
}
