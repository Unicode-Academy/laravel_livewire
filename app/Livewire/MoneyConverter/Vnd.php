<?php

namespace App\Livewire\MoneyConverter;

use Livewire\Component;

class Vnd extends Component
{
    public $vnd = 0;
    public function updated($key, $value)
    {
        $this->dispatch('vnd-change', $value);
    }
    public function render()
    {
        return view('livewire.money-converter.vnd');
    }
}
