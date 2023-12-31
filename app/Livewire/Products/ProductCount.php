<?php

namespace App\Livewire\Products;

use Livewire\Component;

class ProductCount extends Component
{
    public function handleClick()
    {
        $this->dispatch('product-created', 1);
    }
    public function handleClear()
    {
        $this->dispatch('product-clear')->to(ProductList::class);
    }
    public function render()
    {
        return view('livewire.products.product-count');
    }
}