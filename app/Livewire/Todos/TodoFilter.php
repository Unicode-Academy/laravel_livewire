<?php

namespace App\Livewire\Todos;

use Livewire\Component;

class TodoFilter extends Component
{
    public function handleSearch($keyword = '')
    {
        $this->dispatch('filter-todo', $keyword);
    }

    public function render()
    {
        return view('livewire.todos.todo-filter');
    }
}
