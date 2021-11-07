<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Bookshelf;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Book::class;
    public function definition()
    {
        return [
            'book_name'=>$this->faker->words(5, true),
            'year_release'=>$this->faker->randomNumber(4,true),
            'description'=>$this->faker->text(20),
            'author'=>$this->faker->firstName(),
            'publisher'=>$this->faker->company(),
            'type_name'=> function(){
                $bookshelf = Bookshelf::all()->shuffle()->get(1);
                return $bookshelf->code;
            }
        ];
    }
}
