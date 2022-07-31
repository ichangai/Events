<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                
                'title'  => 'Awards',
                'slug' => 'awards',
                'image' => 'https://res.cloudinary.com/calvin254/image/upload/v1658949748/ForexArena%20Category/forex_awards.jpg',
            ],
            [
                'title'  => 'Competition',
                'slug' => 'competition',
                'image' => 'https://res.cloudinary.com/calvin254/image/upload/v1658921696/ForexArena%20Category/forex_arena_competition.jpg',
            ],
            [
                'title'  => 'Conference',
                'slug' => 'conference',
                'image' => 'https://res.cloudinary.com/calvin254/image/upload/v1659199123/ForexArena%20Category/forex_arena_conference.jpg',
            ],
            [
                'title'  => 'Seminar',
                'slug' => 'seminar',
                'image' => 'https://res.cloudinary.com/calvin254/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1659199581/ForexArena%20Category/forex_arena_seminar.webp',
            ],
            [
                'title'  => 'Expos',
                'slug' => 'expos',
                'image' => 'https://res.cloudinary.com/calvin254/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1659199513/ForexArena%20Category/forexarena_expo.jpg',
            ],
        ]);
    }
}
