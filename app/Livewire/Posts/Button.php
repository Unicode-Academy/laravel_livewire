<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class Button extends Component
{
    
    public function goList() {
        return redirect()->to('/list');
    }

    public function render()
    {
        return <<<'HTML'
        <button wire:click="goList">Đăng ký ngay</button>
        HTML;
    }
}
