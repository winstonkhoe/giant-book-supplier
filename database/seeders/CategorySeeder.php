<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Adventure'
        ]);
        Category::create([
            'name' => 'Classics'
        ]);
        Category::create([
            'name' => 'Crime'
        ]);
        Category::create([
            'name' => 'Fairy tales, fables, and folk tales'
        ]);
        Category::create([
            'name' => 'Fantasy'
        ]);
        Category::create([
            'name' => 'Historical fiction'
        ]);
        Category::create([
            'name' => 'Horror'
        ]);
        Category::create([
            'name' => 'Humour and satire'
        ]);
    }
}
