<?php

namespace App\Livewire\Products;

use Livewire\Component;

class Products extends Component
{
    public $message = '';
    public function render()
    {
        return view('livewire.products.products');
    }
}
