<?php

namespace Database\Factories;

use App\Models\Bookshelf;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookshelfFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Bookshelf::class;
    public function definition()
    {
        return [
            'code'=> $this->faker->numerify('RACK####'),
            'type_name' => $this->faker->word(5),
            'description' => $this->faker->paragraph(2)
        ];
    }
}
