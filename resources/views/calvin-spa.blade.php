<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token()}}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <style src="{{ mix('css/app.css')}}"></style>
    </head>
    <body>
        <h1>Hola Mundo</h1>
        <div id="app">
            <nav-bar></nav-bar>
        </div>
        <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>
