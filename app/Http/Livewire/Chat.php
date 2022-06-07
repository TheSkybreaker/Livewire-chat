<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Chat extends Component
{
    public $posts;
    public $startTime;
    public $newPost;
    public $sender;

    public function mount() {
        $this->posts = Post::where(
            'created_at',
            '>',
            Carbon::now()->subMinutes(2)
        )->get();

        $this->startTime = Carbon::now();
    }

    protected $rules = [
        'sender' => 'required',
        'newPost' => 'required',
    ];

    public function storePost()
    {
        $this->validate();

        Post::create([
            'content' => $this->newPost,
            'sender' => $this->sender
        ]);
        $this->scrollDown = true;

        $this->reset('newPost');
    }

    public function render()
    {
        $latestPost = Post::where(
            'created_at',
            '>',
            $this->startTime
        )->get();

        return view('livewire.chat', [
            'posts'=> $this->posts,
            'latest'=>$latestPost
        ]);

    }
}
