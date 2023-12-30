<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\Attributes\On;

class ProductList extends Component
{
    public $id = 0;
    public $products = ['Product 1', 'Product 2', 'Product 3'];

    #[On('product-created')]
    public function handleCreated($id)
    {
        $this->id = $id;
    }
    #[On('product-clear')]
    public function productClear()
    {
        $this->products = [];
    }
    public function render()
    {
        return view('livewire.products.product-list');
    }
}
