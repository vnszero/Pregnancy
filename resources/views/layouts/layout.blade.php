<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Default Title')</title>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.0/dist/tailwind.min.css">
    <link href="{{ asset('css/general.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        @yield('header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>
