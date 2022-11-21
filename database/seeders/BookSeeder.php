<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 0; $i < 20; $i++) {
            Book::create([
                'publisher_id' => random_int(1, 10),
                'title' => $faker->regexify('Book [A-Z]'),
                'author' => $faker->name(),
                'year' => $faker->numberBetween(1980, 2022),
                'synopsis' => $faker->paragraph(1),
                'image' => 'https://media.graphassets.com/HogqJbQNqHjoldFhHegz',
                // 'image' => $faker->imageUrl(400, 600, 'book', true),
            ]);
        }
    }
}
