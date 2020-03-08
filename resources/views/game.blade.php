@extends ('layouts.master')

@section ('game')

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
                            <script>
                                $(document).ready(function(){
                            $("button").click(function(){
                            $.get("/words", function(data, status){
                            alert("Data: " + data + "\nStatus: " + status);
                            });
                            });
                            });
                            </script>

                            <button>Send an HTTP GET request to a page and get the result back</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
