<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Full Stack Blog</title>
    </head>
    <body class="antialiased">
        <div id="app">
            <mainapp></mainapp>
        </div>
    <script src="{{mix('/js/app.js')}}"></script>
    </body>
</html>
