<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\Attributes\On;

class Products extends Component
{
    public $message = '';
    #[On('product-clear')]
    public function productClear()
    {
        dd(1);
    }
    public function render()
    {
        return view('livewire.products.products');
    }
}
