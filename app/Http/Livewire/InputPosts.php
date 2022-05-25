<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class InputPosts extends Component
{
    public $newPost;
    public $sender;

    public function storePost() {
        Post::create([
            'content'=>$this->newPost,
            'sender'=>$this->sender
        ]);
        
        $this->reset('newPost');
    }

    public function render()
    {
        return view('livewire.input-posts');
    }
}
