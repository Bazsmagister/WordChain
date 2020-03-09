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


                        <hr>
                        <div>Lastword:

                        </div>

                        <div class="word">
                            Last character is:
                            <br>

                            @php
                            //sleep(1);
                            $last = substr((old('word')), -1);
                            echo (substr((old('word')), -1));
                            @endphp
                            <br>
                            My word is: {{----}}
                            @php
                            echo ($last);
                            var_dump(DB::table('words')->get()->last->$last));
                            var_dump(DB::table('words')->get()->last());
                            //DB::table('words')->where('$last', NOT NULL)->get()->last();
                            //DB::table('words')->where('$last', NOT NULL)->get()->last();
                            @endphp
                            <hr>
                            <script>
                                $.ajaxSetup({

                            headers: {

                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                            }

                            });


                            $(".submit").click(function(e){


                            e.preventDefault();


                            $.ajax({

                            type:'GET',

                            url:'/ajaxRequest',

                            data:{} ,

                            success:function(data){

                            alert(data.success);

                            }

                            });


                            });
                            </script>

                            <button class="submit">Send an HTTP GET request to a page and get the result back</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
