<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <body>


        @foreach ($words as $word)

            <div class="container">
                <ul>
                    <li>{{$word}} </li>
                </ul>
            </div>

        @endforeach


        {{ $wordes->links() }}




    </body>
</body>
</html>
