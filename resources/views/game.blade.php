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
                        {{$errors}}
                        @endif






                        <?php
                    //With Laravel:
                    ?>
                        <div>Your word was:</div>
                            {{old('word')}}


                        <div class="container">

                        </div>





                        <br>
                        My word is: {{--   --}}
                        <br>




                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div>




</div>

@include ('includes.footer')
