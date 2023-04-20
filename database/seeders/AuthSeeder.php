<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $auth = new AuthSeeder();
            $auth->title = $faker->unique()->sentence($faker->numberBetween(3, 5));
            $auth->content = $faker->optional()->text(500);
            $auth->slug = Str::slug($auth->title, '-');
            $auth->save();
        }
    }
}
