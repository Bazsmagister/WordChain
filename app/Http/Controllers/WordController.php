<?php

namespace App\Http\Controllers;

use App\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
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

    $words = Word::simplePaginate(5);
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

        //$word = new Word;
        $word = $request->word;
        // ord Returns the ASCII value of the first character of a string
        $firstletter = ord($word);
        dd($firstletter);
        //dd($word);
        /*
        $input = $request->input();
        dd($input);
        */
        $word->save();

        // redirect
        Session::flash('message', 'Successfully created word!');
        return Redirect::to('words');

        /*
            $validator = Validator::make($request, ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'x', 'y', 'z' => 'required|min:2|max:32|regex:/^[a-z ,.\'-]+$/i |alpha_dash']);

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
