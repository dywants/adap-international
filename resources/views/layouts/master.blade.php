<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/favicon-512x512.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>ADAP-International</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .shadow-navbar{
            background: #FFF;
            box-shadow: 0px 4px 16px 0px rgba(0, 0, 0, 0.10);
        }

        .bg-graded{
            background: linear-gradient(50deg, rgba(0, 0, 0, 0.70) 0%, rgba(0, 0, 0, 0.00) 100%);
        }

        .title-section{
            color: #161615;
            font-family: SF Pro Display, serif;
            font-size: 34px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }

        .paragraph{
            color: #575756;
            font-family: SF Pro Display, serif;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 22px; /* 137.5% */
        }

        .radius{
            border-radius: 24px;
        }

        .card-title{
            color: #161615;
            font-family: SF Pro Display, serif;
            font-size: 18px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }

        .card-activity{
            justify-content: center;
        }

        .card-grid-4{
            display: grid;
            grid-template-columns: repeat(auto-fit, 358px);
            gap: 12px;
        }

        .number{
            color: #000;
            font-family: SF Pro Display, serif;
            font-size: 34px;
            font-style: normal;
            font-weight: 700;
            padding-bottom: 20px;
        }

        .bg-primary{
            background: #2ACF03 !important;
        }
    </style>
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
