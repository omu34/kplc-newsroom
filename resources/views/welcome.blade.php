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
    @vite('resources/css/custom.css')
</head>

<body class="antialiased">

    @livewire('basic-banner')
    @livewire('breadcrumb')
    @livewire('tags')
    @livewire('search')
    @livewire('featured-news')
    @livewire('latest-videos')
    @livewire('latest-news')
    @livewire('latest-gallery')
    @livewire('footer')
</body>

<style>
    article:hover .bg-gradient-to-t {
            background: rgba(13, 31, 81, 0.8); /* blue-900 with opacity */
        }
    * {
        font-family: "Lexend Deca", sans-serif;
    }
    .bog-content p{
        margin-bottom:12px;
    }

    .testy {

        background-image: url("bg.png");
    }
</style>

</html>
