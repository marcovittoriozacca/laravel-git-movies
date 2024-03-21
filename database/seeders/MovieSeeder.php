<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        for ($i=0; $i < 10; $i++) { 
            $movie = new Movie();

            $movie->name = $faker->sentence(4);
            $movie->description = $faker->paragraph(3, true);
            $movie->producer = $faker->firstName() .' '. $faker->lastName();
            $movie->release_date = $faker->date();
            $movie->rating = $faker->numberBetween(1, 5);
            $movie->duration = $faker->numberBetween(30, 160);

            $movie->save();
        }
    
    }
}
