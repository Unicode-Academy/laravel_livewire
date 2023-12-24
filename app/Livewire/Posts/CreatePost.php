<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;

class CreatePost extends Component
{
   
    public $posts = [];
    public $name = null;
    public $result = null;

    #[Title('Thêm bài viết')] 

    public function handleSubmit() {
        $post = new Post();
        $post->name = $this->name;
        $post->save();
        $this->result = $this->name;
        $this->name = '';
        // return redirect('/posts')->with('msg', 'Thêm thành công');
        session()->flash('msg', 'Thêm thành công');
        return $this->redirect('/posts', true);
    }

    public function render()
    {
        return view('livewire.posts.create-post');
    }
}
