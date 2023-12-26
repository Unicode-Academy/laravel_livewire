<?php

namespace App\Livewire\Todos;

use Livewire\Component;
use Livewire\Attributes\On;

class Todos extends Component
{
    public $todoList = [];

    #[On('created-todo')]
    public function createTodo($name)
    {
        $this->todoList[] = [
            'id' => uniqid(),
            'name' => $name,
            'completed' => false
        ];
    }

    public function render()
    {
        return view('livewire.todos.todos');
    }
}
