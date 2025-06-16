<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $genres = [
            'Adventure',
            'Romance',
            'Mystery',
            'Horror',
            'Science Fiction',
            'Fantasy',
            'Historical',
            'Drama',
            'Thriller',
            'Comedy',
            'Slice of Life',
            'Supernatural',
            'Crime',
            'Dystopian',
            'Coming-of-Age',
            'Satire',
            'Fairy Tale',
            'Mythology',
            'War',
            'Tragedy',
        ];

        foreach ($genres as $name) {
            Genre::create(['name' => $name]);
        }
    }
}
