<?php

namespace App\Livewire\MoneyConverter;

use Livewire\Component;

class Usd extends Component
{
    public $usd = 0;
    public function mounted($usd)
    {
        $this->usd = $usd;
    }
    public function render()
    {
        return view('livewire.money-converter.usd');
    }
}
