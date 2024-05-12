<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="antialiased">

    @livewire('banner')
    @livewire('featured-news')
    @livewire('latest-videos')
    @livewire('latest-news')
    @livewire('latest-gallery')
    <div class="bg-[#FACA21] ">


        <div class="lg:px-0 px-10 mx-auto max-w-5xl">
            <div class="py-4 px-6 sm:flex sm:justify-between items-center">
                <!-- 1/3 Section (Quick Links) -->
                <div class="sm:w-1/4">
                    <h2 class="text-3xl font-bold tracking-tight lg:pb-0 pb-5 text-[#163466] sm:text-4xl">Quick Links</h2>
                </div>

                <!-- 2/3 Section (Navigation with Icons) -->
                <nav class="sm:w-3/4 flex flex-col sm:flex-row sm:justify-end sm:items-center">

                    <a href="#" class="flex items-center text-gray-800 hover:text-gray-600 py-2 px-3">
                        <img src="/badge.svg" class="w-8 h-8 mr-3" alt="">
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center text-gray-800 hover:text-gray-600 py-2 px-3">
                        <img src="/badge.svg" class="w-8 h-8 mr-3" alt="">
                        Messages
                    </a>
                    <a href="#" class="flex items-center text-gray-800 hover:text-gray-600 py-2 px-3">
                        <img src="/badge.svg" class="w-8 h-8 mr-3" alt="">
                        Notifications
                    </a>
                </nav>
            </div>
        </div>
    </div>




</body>

<style>
    * {
        font-family: "Lexend Deca", sans-serif;
    }

    .testy {

        background-image: url("bg.png");
    }
</style>

</html>
