<?php
namespace Database\Seeders;

use App\Models\Publisher;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publisher_logos = [
            'https://i.pinimg.com/originals/cf/af/b4/cfafb45f59defb9457ab6392c5597f16.png',
            'https://i.pinimg.com/originals/72/ae/41/72ae41ca381f197ecf93541b90138640.png',
            'https://99designs-blog.imgix.net/blog/wp-content/uploads/2013/04/pub25.png?auto=format&q=60&fit=max&w=930'
        ];
        $faker = Faker::create('id_ID');
        for($i = 0; $i < 10; $i++) {
            Publisher::create([
                'name' => $faker->name,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'image' => $publisher_logos[random_int(0, count($publisher_logos)-1)],
                // 'image' => $faker->imageUrl(400, 400, 'publishing company logo', true),
            ]);
        }
    }
}
