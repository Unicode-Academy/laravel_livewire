<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;

class Posts extends Component
{
    #[Title('Danh sách bài viết')] 
    public $posts = [];
    
    public function navigateCreate() {
        // return redirect()->to('/posts/create');
        return $this->redirect('/posts/create', true);
    }

    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts.posts');
    }
}
