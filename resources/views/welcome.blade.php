<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <!-- Alpine Core -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Live chat</title>
    <style>
        *{
        -ms-overflow-style: none; /* for Internet Explorer, Edge */
        scrollbar-width: none; /* for Firefox */
        overflow-y: scroll;
        }
        
        *::-webkit-scrollbar {
        display: none; /* for Chrome, Safari, and Opera */
        }
    </style>
    @livewireStyles
</head>
<body>
    <div class="flex justify-center items-center h-screen">
        <div class="border-2 border-black rounded p-4 w-full md:w-96 h-full md:h-auto">
            <livewire:chat />
        </div>
    </div>

    @livewireScripts
</body>
</html>