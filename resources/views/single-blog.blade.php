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

    @livewire('banner')
    @livewire('breadcrumb')
    @livewire('blog-content')

    @livewire('footer')
</body>



</html>
