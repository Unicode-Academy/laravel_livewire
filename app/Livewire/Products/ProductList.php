<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\Attributes\On;

class ProductList extends Component
{
    public $id = 0;
    #[On('product-created')]
    public function handleCreated($id)
    {
        $this->id = $id;
    }
    public function render()
    {
        return view('livewire.products.product-list');
    }
}
