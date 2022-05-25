<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Counter extends Component
{
    public $posts;
    public $startTime;

    public function mount() {
        $this->posts = Post::where(
            'created_at',
            '>',
            Carbon::now()->subMinutes(2)
        )->get();

        $this->startTime = Carbon::now();
    }

    public function render()
    {
        $latestPost = Post::where(
            'created_at',
            '>',
            $this->startTime
        )->get();

        return view('livewire.counter', [
            'posts'=> $this->posts,
            'latest'=>$latestPost
        ]);
    }
}
