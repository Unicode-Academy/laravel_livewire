<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Livewire\Attributes\Title;

class CreatePost extends Component
{
   
    public $posts = [];
    public $name = null;
    public $result = null;

    #[Title('Thêm bài viết')] 

    public function handleSubmit() {
       $this->result = $this->name;
    }

    public function render()
    {
        return view('livewire.posts.create-post');
    }
}
