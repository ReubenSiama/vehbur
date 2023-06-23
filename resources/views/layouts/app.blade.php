<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehbur</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-100">
    @yield('navbar')
    @yield('header')
    <div class="py-4 min-h-screen">
        <div class="px-4 md:px-60 mx-auto">
            @yield('main')
        </div>
    </div>
    <div class="mt-auto">
        @yield('footer')
    </div>
</body>
</html>
