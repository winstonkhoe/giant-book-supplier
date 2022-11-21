<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 40; $i++) {
            BookCategory::create([
                'book_id' => random_int(1, 20),
                'category_id' => random_int(1, 8)
            ]);
        }
    }
}
