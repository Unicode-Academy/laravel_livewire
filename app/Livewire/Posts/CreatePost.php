<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class CreatePost extends Component
{
    public $title = null;

    public function mount($title = null) {
        $this->title = $title;
    }

    public function render()
    {
        $content = 'Xin chào Unicode';
        return view('livewire.posts.create-post')->with(compact('content'));
    }
}
