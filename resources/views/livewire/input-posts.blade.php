<div class="mt-5 relative">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
        <form wire:submit.prevent="storePost">

            <input type="text" name="sender" id="sender" wire:model.defer="sender" placeholder="Sender" class="block my-4 w-full border border-slate-300 rounded-md py-2 pl-2 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm">

            @error('sender') <span class="error block text-red-600 my-2">{{ $message }}</span> @enderror

            <input type="text" name="newPost" id="newPost" wire:model.defer="newPost" placeholder="Content" class="block my-4 w-full border border-slate-300 rounded-md py-2 pl-2 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm">

            @error('newPost') <span class="error block text-red-600 my-2">{{ $message }}</span> @enderror

            <button type="submit" class="my-4 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded block w-full">Send</button>
        </form>
</div>
