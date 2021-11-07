<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Bookshelf;
use Illuminate\Database\Seeder;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bookshelf::factory()->count(50)->create();
        Book::factory()->count(200)->create();
    }
}
