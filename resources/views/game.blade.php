@extends ('layouts.master')
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

                        @include('includes.errors')


                        <?php
                    //With Laravel:
                    ?>
                        <div class="">Your word was: </div>
                        {{old('word')}}


                        <div class="word">
                            @php
                            //sleep(1);
                            @endphp
                            My word is: {{--   --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    h
</div>

@include ('includes.footer')
