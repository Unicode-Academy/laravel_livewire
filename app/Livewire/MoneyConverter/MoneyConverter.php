<?php

namespace App\Livewire\MoneyConverter;

use Livewire\Component;
use Livewire\Attributes\On;

class MoneyConverter extends Component
{
    public $vnd = 0;
    public $usd = 0;
    #[On('vnd-change')]
    public function convertVndToUsd($vnd)
    {
        $this->usd = round((int)$vnd / 25000, 2);
    }

    public function render()
    {
        return view('livewire.money-converter.money-converter');
    }
}
