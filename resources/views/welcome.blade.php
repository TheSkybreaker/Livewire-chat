<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
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
        <div class="border-2 border-black rounded p-4 w-96">
            <livewire:counter />
            <livewire:input-posts />
        </div>
    </div>

    @livewireScripts
</body>
</html>