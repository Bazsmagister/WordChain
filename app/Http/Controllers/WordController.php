<?php

namespace App\Http\Controllers;

use App\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Symfony\Component\Console\Input\Input;

class WordController extends Controller
{
    /*
    public $rules =
        [
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'x', 'y', 'z' => 'required|min:2|max:32|regex:/^[a-z ,.\'-]+$/i |alpha_dash' ,

        ];
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //$words = Word::get();
    //$words = DB::Word->get();

    //with paginate
    $words = Word::simplePaginate(5);
    $words = Word::get();
    return view('words', compact('words'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('game');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $validator = Validator::make($request, ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u','v', 'x', 'y', 'z' => 'required|min:1|max:32|regex:/^[a-z ,.\'-]+$/i |alpha_dash']);

            // process the login
            if ($validator->fails()) {
                return Redirect::to('game')
                    ->withErrors($validator);
            } else {
                // store

*/



                /*
                $string = "'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u','v','w', 'x', 'y', 'z'";
                echo(str_replace(",", "=>", $string));
                */

                Validator::make($request->all(), [
                    //'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', //'u','v','w', 'x', 'y', 'z' => 'min:1|max:32|alpha_dash',

                    /*
                    'a'=> 'min:2|max:32|alpha',
                    'b'=> 'min:2|max:32|alpha',
                    'c'=> 'min:2|max:32|alpha',
                    'd'=> 'min:2|max:32|alpha',
                    'e'=> 'min:2|max:32|alpha',
                    'f'=> 'min:2|max:32|alpha',
                    'g'=> 'min:2|max:32|alpha',
                    'h'=> 'min:2|max:32|alpha',
                    'i'=> 'min:2|max:32|alpha',
                    'j'=> 'min:2|max:32|alpha',
                    'k'=> 'min:2|max:32|alpha',
                    'l'=> 'min:2|max:32|alpha',
                    'm'=> 'min:2|max:32|alpha',
                    'n'=>'min:2|max:32|alpha',
                     'o'=>'min:2|max:32|alpha',
                     'p'=>'min:2|max:32|alpha',
                     'q'=>'min:2|max:32|alpha',
                    'r'=>'min:2|max:32|alpha',
                    's'=>'min:2|max:32|alpha',
                    't'=> 'min:2|max:32|alpha',
                    'u'=> 'min:2|max:32|alpha',
                    'v'=> 'min:2|max:32|alpha',
                    'w'=> 'min:2|max:32|alpha',
                    'x'=> 'min:2|max:32|alpha',
                    'y'=> 'min:2|max:32|alpha',
                    'z'=>  'min:2|max:32|alpha',
                    */
                    'word'=>  'required|min:2|max:32|alpha',
                    //"'word->a'"=>  'min:2|max:32|alpha',
                ])->validate();

        //$word = Word::create($request->all());
        /*
        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');
        $d = $request->input('d');
        $e = $request->input('e');
        $f = $request->input('f');
        $g = $request->input('g');
        $h = $request->input('h');
        $i = $request->input('i');
        $j = $request->input('j');
        $k = $request->input('k');
        $l = $request->input('l');
        $m = $request->input('m');
        $n = $request->input('n');
        $o = $request->input('o');
        $p = $request->input('p');
        $q = $request->input('q');
        $r = $request->input('r');
        $s = $request->input('s');
        $t = $request->input('t');
        $u = $request->input('u');
        $v = $request->input('v');
        $x = $request->input('x');
        $y = $request->input('y');
        $z = $request->input('z');
        */

        //$input = $request->all();
        //dd($input);
        //dd($input=>word);
        $word = new Word;
        //$word = $request->query('word');
        //$word = Word::create($request->all());
        $rword = $request->word;
        //dd($word);
        // ord Returns the ASCII value of the first character of a string
        $wordlovercase = strtolower($rword);
        $firstletter = ord($wordlovercase);
        //dd($firstletter);
        switch ($firstletter) {
            case '97':
               // $word = $request->query('word');
                $word = new Word;
                $word -> a = $request->word;
                //dd($word->a);
                //dd($word);
                $word->save();

                break;
                case '98':
                    // $word = $request->query('word');
                     $word = new Word;
                     $word -> b = $request->word;
                     //dd($word->a);
                     //dd($word);
                     $word->save();

                break;
                case '99':
                        // $word = $request->query('word');
                         $word = new Word;
                         $word -> c = $request->word;
                         //dd($word->a);
                         //dd($word);
                         $word->save();

                break;
                case '100':
                   // $word = $request->query('word');
                    $word = new Word;
                    $word -> d = $request->word;
                    //dd($word->a);
                             //dd($word);
                             $word->save();

                             break;
                case '101':
                   // $word = $request->query('word');
                    $word = new Word;
                    $word -> e = $request->word;
                    //dd($word->a);
                    //dd($word);
                    $word->save();

                    break;

                    case '102':
                        // $word = $request->query('word');
                         $word = new Word;
                         $word -> f = $request->word;
                         //dd($word->a);
                         //dd($word);
                         $word->save();

                         break;

                         case '103':
                            // $word = $request->query('word');
                             $word = new Word;
                             $word -> g = $request->word;
                             //dd($word->a);
                             //dd($word);
                             $word->save();

                             break;

                             case '104':
                                // $word = $request->query('word');
                                 $word = new Word;
                                 $word -> h = $request->word;
                                 //dd($word->a);
                                 //dd($word);
                                 $word->save();

                                 break;

                                 case '105':
                                    // $word = $request->query('word');
                                     $word = new Word;
                                     $word -> i = $request->word;
                                     //dd($word->a);
                                     //dd($word);
                                     $word->save();

                                     break;

                                     case '106':
                                        // $word = $request->query('word');
                                         $word = new Word;
                                         $word -> j = $request->word;
                                         //dd($word->a);
                                         //dd($word);
                                         $word->save();

                                         break;

                                         case '107':
                                            // $word = $request->query('word');
                                             $word = new Word;
                                             $word -> k = $request->word;
                                             //dd($word->a);
                                             //dd($word);
                                             $word->save();

                                             break;

                                             case '108':
                                                // $word = $request->query('word');
                                                 $word = new Word;
                                                 $word -> l = $request->word;
                                                 //dd($word->a);
                                                 //dd($word);
                                                 $word->save();

                                                 break;


                                                 case '109':
                                                    // $word = $request->query('word');
                                                     $word = new Word;
                                                     $word -> m = $request->word;
                                                     //dd($word->a);
                                                     //dd($word);
                                                     $word->save();

                                                     break;

                                                     case '110':
                                                        // $word = $request->query('word');
                                                         $word = new Word;
                                                         $word -> n = $request->word;
                                                         //dd($word->a);
                                                         //dd($word);
                                                         $word->save();

                                                         break;

                                                         case '111':
                                                            // $word = $request->query('word');
                                                             $word = new Word;
                                                             $word -> o = $request->word;
                                                             //dd($word->a);
                                                             //dd($word);
                                                             $word->save();

                                                             break;
                                                             case '112':
                                                                // $word = $request->query('word');
                                                                 $word = new Word;
                                                                 $word -> p = $request->word;
                                                                 //dd($word->a);
                                                                 //dd($word);
                                                                 $word->save();

                                                                 break;
                                                                 case '113':
                                                                    // $word = $request->query('word');
                                                                     $word = new Word;
                                                                     $word -> q = $request->word;
                                                                     //dd($word->a);
                                                                     //dd($word);
                                                                     $word->save();

                                                                     break;

                                                                     case '114':
                                                                        // $word = $request->query('word');
                                                                         $word = new Word;
                                                                         $word -> r = $request->word;
                                                                         //dd($word->a);
                                                                         //dd($word);
                                                                         $word->save();

                                                                         break;
                                                                         case '115':
                                                                            // $word = $request->query('word');
                                                                             $word = new Word;
                                                                             $word -> s = $request->word;
                                                                             //dd($word->a);
                                                                             //dd($word);
                                                                             $word->save();

                                                                             break;

                                                                             case '116':
                                                                                // $word = $request->query('word');
                                                                                 $word = new Word;
                                                                                 $word -> t = $request->word;
                                                                                 //dd($word->a);
                                                                                 //dd($word);
                                                                                 $word->save();

                                                                                 break;

                                                                                 case '117':
                                                                                    // $word = $request->query('word');
                                                                                     $word = new Word;
                                                                                     $word -> u = $request->word;
                                                                                     //dd($word->a);
                                                                                     //dd($word);
                                                                                     $word->save();

                                                                                     break;
                                                                                     case '118':
                                                                                        // $word = $request->query('word');
                                                                                         $word = new Word;
                                                                                         $word -> v = $request->word;
                                                                                         //dd($word->a);
                                                                                         //dd($word);
                                                                                         $word->save();

                                                                                         break;
                                                                                         case '119':
                                                                                            // $word = $request->query('word');
                                                                                             $word = new Word;
                                                                                             $word -> w = $request->word;
                                                                                             //dd($word->a);
                                                                                             //dd($word);
                                                                                             $word->save();

                                                                                             break;
                                                                                             case '120':
                                                                                                // $word = $request->query('word');
                                                                                                 $word = new Word;
                                                                                                 $word -> x = $request->word;
                                                                                                 //dd($word->a);
                                                                                                 //dd($word);
                                                                                                 $word->save();

                                                                                                 break;
                                                                                             case '121':
                                                                                                // $word = $request->query('word');
                                                                                                 $word = new Word;
                                                                                                 $word -> y = $request->word;
                                                                                                 //dd($word->a);
                                                                                                 //dd($word);
                                                                                                 $word->save();

                                                                                                 break;
                                                                                                 case '122':
                                                                                                    // $word = $request->query('word');
                                                                                                     $word = new Word;
                                                                                                     $word -> z = $request->word;
                                                                                                     //dd($word->a);
                                                                                                     //dd($word);
                                                                                                     $word->save();

                                                                                                     break;
                                                                                                     case '123':
                                                                                                        // $word = $request->query('word');
                                                                                                         $word = new Word;
                                                                                                         $word -> z = $request->word;
                                                                                                         //dd($word->a);
                                                                                                         //dd($word);
                                                                                                         $word->save();

                                                                                                         break;
            default:
                echo('choose an alphabetical character pls!');
                break;
        }

        //dd($word);
        /*
        $input = $request->input();
        dd($input);
        */
        //$word->save();

        // redirect

        //$request->flash('message', 'Successfully created word!');
        //Session::flash('message', 'Successfully created word!');
        //->withInput() adds the Request::flash() / $request->flash() automatically
        return Redirect::to('game')->withInput();;

        //return view('game', compact('rword'));
        /*
            $validator = Validator::make($request, ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'x', 'y', 'z' => 'required|min:1|max:32|regex:/^[a-z ,.\'-]+$/i |alpha_dash']);

            // process the login
            if ($validator->fails()) {
                return Redirect::to('game')
                    ->withErrors($validator);
            } else {
                // store
                $word = new Word;

                $nerd->save();

                // redirect
                Session::flash('message', 'Successfully created word!');
                return Redirect::to('words');
            }
        */

        /*
            $word = Word::create($request->all());

            //$word->create($request->all());
            $word->save();
        */




        /*
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(['errors' => $validator->getMessageBag()->toArray()]);
        } else {
            $word = Word::create($request->all());

            $word->create($request->all());
            $word->save();

            return response()->json($word);
        }
        */

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function show(Word $word)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function edit(Word $word)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Word $word)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function destroy(Word $word)
    {
        //
    }
}
