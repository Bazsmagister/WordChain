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

    @include ('includes.header')


    <div id="header-wrapper">

        <div id="header-featured">
            <div id="banner-wrapper">
                <div id="banner" class="container">
                    <h2>Wordchain game</h2>
                    <h3>Pick a word, and I will find an other with your word's last letter.
                        Enjoy!</h3>

                    <a href="/game" class="button">Let's start</a>
                </div>
            </div>
        </div>
    </div>




    <div id="example" class="title m-b-md">

    </div>


    @include ('includes.footer')

    <script src="js/app.js"></script>

</body>



</html>
