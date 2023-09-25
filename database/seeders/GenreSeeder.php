<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::truncate();

        $genres = [
            'rock',
            'pop',
            'metal',
            'rap',
            'trap'
        ];
        
        for ($i=0; $i < Str::length('$genres')  ; $i++) { 
            
            $genre = new Genre();

            $genre -> name = $genres[$i];
            $genre -> slug = Str::slug($genre -> name);

            $genre->save();

        };


        // foreach ($types as $type) {
        //     $slug = str()->slug($type['name']);
        //     Type::create([
        //         'name' => $type['name'],
        //         'slug' => $slug
        //     ]);
    }
}
