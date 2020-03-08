<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>


<body>

    <div id="header" class="container">

        <div id="menu">
            <ul>
                <li><a href="/" accesskey="1" title="">Welcome</a></li>
                <li><a href="game" accesskey="2" title="">Game</a></li>
                <li><a href="about_me" accesskey="3" title="">About Me</a></li>
                <li><a href="words" accesskey="3" title="">Words</a></li>

            </ul>
        </div>
    </div>

    @yield ('about_me')
    @yield ('game')
    @yield ('welcome')
    @yield ('words')



    <div id="example">

    </div>


    @include ('includes.footer')




</body>


</html>
