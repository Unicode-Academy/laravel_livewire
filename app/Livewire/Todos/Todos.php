<?php

namespace App\Livewire\Todos;

use Livewire\Component;
use Livewire\Attributes\On;

class Todos extends Component
{
    public $todoList = [];
    public $msg = null;

    #[On('created-todo')]
    public function createTodo($name)
    {
        if (!$name) {
            $this->msg = 'Vui lòng nhập tên';
            return;
        }
        $this->todoList[] = [
            'id' => uniqid(),
            'name' => $name,
            'completed' => false
        ];
        $this->msg = 'Thêm thành công';
    }

    #[On('deleted-todo')]
    public function deletedTodo($id)
    {
        $this->todoList = array_filter($this->todoList, function ($item) use ($id) {
            return $item['id'] != $id;
        });
        $this->msg = 'Xóa thành công';
    }

    public function render()
    {
        return view('livewire.todos.todos');
    }
}
