<?php
use App\Word;
use Illuminate\Database\Seeder;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(WordsTableSeeder::class);
        //$this->call(WordsTableSeeder::class, 1)->create();
        //$this->call(App\Word::class, 5)->create();
        factory(App\Word::class, 1)->create();
    }
}
