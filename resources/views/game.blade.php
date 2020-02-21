
@include ('header')


<div id="header-wrapper">

    <div id="header-featured">
        <div id="banner-wrapper">
            <div id="banner" class="container">
                Pick a word, and I will find an other with your word's last letter.
                Enjoy!

            </div>
            <div>
            <form action="game" method="POST">
                @csrf
                Your word: <input type="text" name="userword"><br>

            <input type="submit">

            </form>
            <div>
                Your word was:  {{ $userword}}
                <br>
                My word is: {{}}
                <br>
                Your turn again:
            </div>
        </div>
        </div>
    </div>
</div>

<div>



</div>

@include ('footer')
