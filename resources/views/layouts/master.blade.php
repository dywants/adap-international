<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADAP International</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="leading-normal tracking-normal flex flex-col min-h-screen ">

    <section class="w-full inset-x-0 z-1600">
        <x-front.navbar></x-front.navbar>
    </section>
    <!--Header-->

    <!--Container-->
    <main class="relative bg-dark-100 grow overflow-hidden">
        @yield('content')
    </main>

    <x-front.footer />
    @yield('extra-js')
</body>

</html>
