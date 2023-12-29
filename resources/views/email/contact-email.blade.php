<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Adap International') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="">
    <p class="text-base text-gray-700 font-bold">Bonjour Vincent,</p>
     <br>
    <p>Mon nom est {{ $content['name'] }}</p>
    <p>Je vous ecrit au sujet de : {{ $content['subject'] }}</p>
     <br>
    <p>{{ $content['message'] }}</p>
</div>

<p>Thank you</p>
</body>
</html>
