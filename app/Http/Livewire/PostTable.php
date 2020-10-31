<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostTable extends Component
{
    public $posts;

    protected $listeners = ['postDelete'];

    public function mount($posts)
    {

        $this->posts = $posts;
    }

    public function postDelete($postId)
    {

        $post        = Post::destroy($postId);
        $this->posts = Post::all();

    }

    public function render()
    {
        return view('livewire.post-table');
    }
}
