<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div>
            <a href="/">
                <img style="width: 120px"
                    src="https://z-p3-scontent.fpnh5-5.fna.fbcdn.net/v/t39.30808-6/406984228_377137304827830_7344420857967713445_n.jpg?_nc_cat=106&cb=99be929b-8d691acd&ccb=1-7&_nc_sid=efb6e6&_nc_eui2=AeGKqAxNg7ILoa2Nh_Nu47jJ2Pb_XRhnnfbY9v9dGGed9i_OhMJd78SY3IyVt1DUow2zdcYU1XLUdNB0Cs2EcUi2&_nc_ohc=veJBAbgru_gAX-MdzgT&_nc_zt=23&_nc_ht=z-p3-scontent.fpnh5-5.fna&oh=00_AfA1Wv4zUeb1W7zcHqut0xXmmvIVDgb4zCCvQ8sRtOp0mA&oe=6592A0A2"
                    alt="">
            </a>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
