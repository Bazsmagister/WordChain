<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Word;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Word::class, function (Faker $faker) {
    return [
        //'name' => $faker->name,

         //'a' => ('a' . (Str::random(10))),
        'a' => 'a' . $faker->word(),
        'b' => 'b' . $faker->word(),
        'c' => 'c' . (Str::random(10)),
        'd' => 'd' . (Str::random(10)),
        'e' => 'e' . (Str::random(10)),
        'f' => 'f' . (Str::random(10)),
        'g' => 'g' . (Str::random(10)),
        'h' => 'h' . (Str::random(10)),
        'i' => 'i' . (Str::random(10)),
        'j' => 'j' . (Str::random(10)),
        'k' => 'k' . (Str::random(10)),
        'l' => 'l' . (Str::random(10)),
        'm' => 'm' . (Str::random(10)),
        'n' => 'n' . (Str::random(10)),
        'o' => 'o' . (Str::random(10)),
        'p' => 'p' . (Str::random(10)),
        'q' => 'q' . (Str::random(10)),
        'r' => 'r' . (Str::random(10)),
        's' => 's' . (Str::random(10)),
        't' => 't' . (Str::random(10)),
        'u' => 'u' . (Str::random(10)),
        'v' => 'v' . (Str::random(10)),
        //'w' => 'w' . (Str::random(10)), w doesn't work
        'x' => 'x' . (Str::random(10)),
        'y' => 'y' . (Str::random(10)),
        'z' => 'z' . (Str::random(10))
        //'created_at' => now(),
        //'updated_at' => now()



        /*
        'a' => 'a' . Str::random(10),
        'b' => 'b' . Str::random(10),
        'c' => 'c' . Str::random(10),
        'd' => 'd' . Str::random(10),
        'e' => 'e' . Str::random(10),
        'f' => 'f' . Str::random(10),
        'g' => 'g' . Str::random(10),
        'h' => 'h' . Str::random(10),
        'i' => 'i' . Str::random(10),
        'j' => 'j' . Str::random(10),
        'k' => 'k' . Str::random(10),
        'l' => 'l' . Str::random(10),
        'm' => 'm' . Str::random(10),
        'n' => 'n' . Str::random(10),
        'o' => 'o' . Str::random(10),
        'p' => 'p' . Str::random(10),
        'q' => 'q' . Str::random(10),
        'r' => 'r' . Str::random(10),
        's' => 's' . Str::random(10),
        't' => 't' . Str::random(10),
        'u' => 'u' . Str::random(10),
        'v' => 'v' . Str::random(10),
        'w' => 'w' . Str::random(10),
        'x' => 'x' . Str::random(10),
        'y' => 'y' . Str::random(10),
        'z' => 'z' . Str::random(10),

        */

    ];
});

/*jibberish
   a = "Alg",
   b = "Ben",
   c= "Col",
   d = "Dae",
   e = "Ele",
   f = "Fol",
   g = "Gor",
   h = "Hia",
   i = "Ial",
   j = "Jal",
   k = "Lac",
   m = "Mat",
   n = "Neo",
   o = "Osp",
   p = "Pan",
   q = "Qua",
   r = "Rub",
   s = "San",
   t = "Tel",
   u = "Una",
   v = "Ver",
   x = "Xyz",
   y = "Ytt",
   z = "Zol";
   */
