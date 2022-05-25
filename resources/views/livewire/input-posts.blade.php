<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
        <form wire:submit.prevent="storePost">
            <input type="text" name="sender" id="sender" wire:model.defer="sender" placeholder="Sender">
            <input type="text" name="newPost" id="newPost" wire:model.defer="newPost" placeholder="Content">
            <button type="submit">Inserisci</button>
        </form>
</div>
