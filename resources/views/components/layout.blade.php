<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.0/dist/tailwind.min.css">
        <link rel="stylesheet" href="general.css">
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
