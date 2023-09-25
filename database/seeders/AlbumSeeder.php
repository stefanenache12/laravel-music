<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Album::truncate();

        for ($i=0; $i < 10; $i++) { 
            
            $album = new Album();

            $album->title = fake()->word();
            $album->year = fake()->year('-20 years');
            $album->description = fake()->sentence('15');
            $album->country = fake()->state();

            $album->save();
        }
    }
}
