<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>WordChain</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <meta name="keywords" content="" />
    <meta name="description" content="WordChain game" />

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
