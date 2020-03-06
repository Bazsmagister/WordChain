@include ('includes.header')


<div id="header-wrapper">

    <div id="header-featured">
        <div id="banner-wrapper">
            <div id="banner" class="container">
                Pick a word!


            <div>
            <form action="words" method="POST">
                @csrf
                Your word:
            <input type="text" name="userword" value="" onchange="hide_it()" ><br>

                <input type="submit" name="submit" value="Submit">

            </form>
            <div>


                <?php
                //With Laravel:
                ?>
                <div>Your word was:</div>Your word was:
                {{$word->last()}}


                <br>
                My word is: {{--   --}}
                <br>

                <script>
                    function myFunction hide_it() {
                    document.getElementById("invisible").style.visibility = "hidden";
                    }
                </script>
                <p id="invisible">
                Your turn again!
                </p>



                    </div>
                 </div>
             </div>
        </div>
    </div>
</div>

<div>



</div>

@include ('includes.footer')
"{{ route('logout') }}"
