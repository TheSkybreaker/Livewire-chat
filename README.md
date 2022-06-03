Almost real time chat made with laravel and Livewire

The chat uses livewire polling instead of websockets or other similar technologies.

You can try with the usual 
- composer install
- copy env.example to .env
- migrate
- php artisan serve 

The chat is in the "/" path
You can set your username and send your text. 
For testing purposes on reload it only load msgs that are at max 60min old, but they remain visible on screen if you don't reload again (this is on purpose)

Old-loaded msgs have 1 hr, new msgs have 2 hr

Added vercel deployment: [Click me!](https://livechat-theskybreaker.vercel.app/)
