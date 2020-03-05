@include ('includes.header')


<div id="header-wrapper">

    <div id="header-featured">
        <div id="banner-wrapper">
            <div id="banner" class="container">
                Pick a word!

                <div>
                    <form action="/words" method="POST">
                        @csrf
                        Your word:
                        <input type="text" name="word">
                        <br>
                        <button type="submit">Submit</button>


                    </form>
                    <div>


                        <!-- if there are creation errors, they will show here -->
                       @if ($errors->all())
                       echo $errors;
                       @endif






                        <?php
                //With Laravel:
                ?>
                        Your word was:


                        <br>
                        My word is: {{--   --}}
                        <br>

                        <script>

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
