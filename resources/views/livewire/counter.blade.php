<div class="overflow-auto h-auto md:h-60">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div wire:ignore>
        @foreach ($posts as $post)
    
            Posted at: {{ $post->created_at->format('M/d h:m') }} <br>
            by: {{ $post->sender }} <br>
            {{ $post->content }} <br>
            <hr>
            
        @endforeach
    </div>

    <div wire:poll.250ms>
        @foreach ($latest as $post)
        
        Posted at: {{ $post->created_at->format('M/d h:i') }} <br>
        by: {{ $post->sender }} <br>
        {{ $post->content }} <br>
        <hr>
        
        @endforeach
    </div>
</div>
