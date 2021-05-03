<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Component</title>
    @env(['staging', 'production'])
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    @endenv

    @env('local')
        <link href="{{ asset('assets/css/tailwind.min.css') }}" rel="stylesheet">
    @endenv
    @livewireStyles
</head>
<body>
    <div class="flex h-screen">
        <div class="m-auto">
            @yield('content')
            <div class="absolute top-10 left-10"><a href="{{ url('/') }}">< Back</a></div>
        </div>
    </div>
    @livewireScripts
</body>
</html>
