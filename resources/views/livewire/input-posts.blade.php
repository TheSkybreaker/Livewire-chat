<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
        <form wire:submit.prevent="storePost">
            <input type="text" name="sender" id="sender" wire:model.defer="sender" placeholder="Sender">
            @error('sender') <span class="error">{{ $message }}</span> @enderror
            <input type="text" name="newPost" id="newPost" wire:model.defer="newPost" placeholder="Content">
            @error('newPost') <span class="error">{{ $message }}</span> @enderror
            <button type="submit">Inserisci</button>
        </form>
</div>
