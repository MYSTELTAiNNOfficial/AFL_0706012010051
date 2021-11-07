<?php

namespace Database\Seeders;

use App\Models\Bookshelf;
use Illuminate\Database\Seeder;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        Bookshelf::factory()
        ->count(50)->create();
    }
}
