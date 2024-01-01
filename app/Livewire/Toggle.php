<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Toggle extends Component
{
    public $isShow = true;
    public $text = null;

    public function handleReset()
    {
        $this->isShow = true;
    }
    #[On('toggle-clicked')]
    public function handleClick($text, $number)
    {
        dd($text, $number);
    }

    public function handleSearch($name)
    {
        dd($name);
    }

    public function render()
    {
        return view('livewire.toggle');
    }
}
