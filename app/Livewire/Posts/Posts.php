<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Livewire\Attributes\Title;

class Posts extends Component
{
    #[Title('Danh sách bài viết')] 
    public $posts = [];
    
    public function navigateCreate() {
        return redirect()->to('/posts/create');
    }

    public function render()
    {
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
        return view('livewire.posts.posts');
    }
}
