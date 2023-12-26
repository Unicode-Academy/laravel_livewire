<?php

namespace App\Livewire\Todos;

use Livewire\Component;

class TodoForm extends Component
{
    public $name = null;

    public function handleAdd()
    {
        if ($this->name) {
            $this->dispatch('created-todo', $this->name);
            $this->reset();
            session()->flash('msg', 'Thêm thành công');
        } else {
            session()->flash('msg', 'Vui lòng nhập tên');
        }
    }

    public function render()
    {
        return view('livewire.todos.todo-form');
    }
}
