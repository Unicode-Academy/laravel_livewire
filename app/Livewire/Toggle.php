<?php

namespace App\Livewire;

use Livewire\Component;

class Toggle extends Component
{
    public $isShow = false;

    public function handleReset()
    {
        $this->isShow = true;
    }

    public function render()
    {
        return view('livewire.toggle');
    }
}
