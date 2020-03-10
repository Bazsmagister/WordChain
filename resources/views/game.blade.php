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
                            echo ($last).'mama';
                            //$l = eval($last);
                            //dd($l);

                            //$w = DB::table('words')->whereNotNull('"$last"')->get();
                            //var_dump((DB::table('words')->where('id', '1')->get());
                            $w = DB::table('words')->where('id', 1)->get();
                            //$w = DB::table('words')->find(1);
                            //dd($w); // it works. it gives back a collection
                            //var_dump($w);//it works. it gives back an obj collection
                            //var_dump($w["0"]);//it works
                            //var_dump($w["0"]["a"]);//Cannot use object of type stdClass as array
                            //var_dump($w["0"]=> a); //syntax error, unexpected '=>'
                            //var_dump($w["0"]=> "a"); //syntax error, unexpected '=>'
                            // var_dump($w["0"] -> 'a'); //syntax error, unexpected ''a''
                            //var_dump($w["0"] -> a); //it works
                            //var_dump($w["0"] -> `$last`); //syntax error, unexpected '`', expecting identifier
                            //var_dump($w["0"] -> `'$last'`); //syntax error, unexpected '`', expecting identifier
                            //var_dump($w["0"] -> {$last}); //Undefined property: stdClass::$
                            //var_dump($w["0"] -> {`$last`}); //Undefined property: stdClass::$
                            //var_dump($w["0"] -> {{$last}}); //syntax error, unexpected '{'
                            //var_dump($w["0"] -> eval($last)); //Call to undefined method stdClass::eval()
                            //var_dump($w["0"]-> '(`$last`)'); syntax error, unexpected ''(`$last`)''
                            var_dump($w["0"]-> '(`$last`)'); //syntax error, unexpected ''(`$last`)''
                            //var_dump($w["0"]-> '($last)'; //syntax error, unexpected ''($last)''
                            //var_dump($w["0"]-> ($last); //syntax error, unexpected '(', expecting identifier
                            //var_dump($w["0"]-> '`$last`'); /syntax error, unexpected ''`$last`''
                            //var_dump($w["0"]-> '$last'); //syntax error, unexpected ''$last''
                            //var_dump($w["0"].$last); //Object of class stdClass could not be converted to string
                            //dd($w->a); //Property [a] does not exist on this collection instance.
                            //dd($w->'a'); //syntax error, unexpected ''a'' (T_CONSTANT_ENCAPSED_STRING),
                            //dd($w[].a); //Cannot use [] for reading
                            //dd($w[]=>a); //syntax error, unexpected '=>

                            //var_dump(DB::table('words')->get()->last());
                            //DB::table('words')->where('$last', NOT NULL)->get()->last();
                            //DB::table('words')->where('$last', NOT NULL)->get()->last();
                            //echo($w->{'$last'}); //Property [$last] does not exist on this collection instance.
                            //echo($w->'$last'); //syntax error, unexpected ''$last'' (T_CONSTANT_ENCAPSED_STRING),
                            //echo($w->{$last});//Property [] does not exist on this collection instance.
                            //echo($w->$last); //Property [] does not exist on this collection instance.
                            //echo($w->{{$last}});//syntax error, unexpected '{'
                            //echo($w->{{`$last`}});//syntax error, unexpected '{'
                            //echo($w->{`$last`});//Property [] does not exist on this collection instance.
                            //echo($w->`$last`); //syntax error, unexpected '`', expecting identifier (T_STRING) or
                            //echo($w->'`$last`');//syntax error, unexpected ''`$last`'' (T_CONSTANT_ENCAPSED_STRING),
                            //echo($w=>[0]); //syntax error, unexpected '=>' (T_DOUBLE_ARROW)
                            //echo($w=>['0']); //syntax error, unexpected '=>' (T_DOUBLE_ARROW)


                            //dd($w=>`$last`);
                            //var_dump($w=>a);
                            //var_dump($w->($last));
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
