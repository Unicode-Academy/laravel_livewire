<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class CreatePost extends Component
{
    public $title = null;
    public $posts = [];
    public $name = null;
    public $result = null;

    public function mount($title = null) {
        $this->title = $title;
        $this->posts = [
            [
                'id' => 2,
                'name' => 'Post 2'
            ],
            [
                'id' => 1,
                'name' => 'Post 1'
            ],
            [
                'id' => 3,
                'name' => 'Post 3'
            ]
        ];
    }

    public function handleSubmit() {
       $this->result = $this->name;
       return redirect()->to('/')->with('msg', 'Thêm thành công');
    }

    public function render()
    {
        $content = 'Xin chào Unicode';
        return view('livewire.posts.create-post')->with(compact('content'));
    }
}
