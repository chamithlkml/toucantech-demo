<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Toucantech Demo</title>
        @routes
        @inertiaHead
        @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/custom.js'])
    </head>
    <body>
    @inertia
    </body>
</html>