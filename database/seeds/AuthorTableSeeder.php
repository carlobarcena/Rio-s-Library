<?php

use Illuminate\Database\Seeder;
use App\Book;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i < 101; $i++) {
        	$book = Book::find($i);
        	$book->author = $faker->firstName($gender = null) . " " .$faker->lastName;;
            $book->save();
        }
    }
}
