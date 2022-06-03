<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div wire:ignore>
        @foreach ($posts as $post)
    
            Creato alle: {{ $post->created_at }} <br>
            da {{ $post->sender }} <br>
            {{ $post->content }} <br>
            <hr>
            
        @endforeach
    </div>

    <div wire:poll.250ms>
        @foreach ($latest as $post)
        
        <hr>
        Creato alle: {{ $post->created_at }} <br>
        da {{ $post->sender }} <br>
        {{ $post->content }} <br>
        <hr>
        
        @endforeach
    </div>
</div>
