<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Http\Response;

class UpdatePost extends Component
{
    public $post = null;
    public function mount(Post $post) {
        // $this->post = Post::find($id);
        // if (!$this->post) {
        //     abort(404);
        // }
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.posts.update-post')
        ->response(function(Response $response) {
            $response->header('X-Custom-Header', '123');
            // $response->setStatusCode(404);
        });;
    }
}
