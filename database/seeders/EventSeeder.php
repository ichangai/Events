<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('events')->insert([
            [
                'id' => 1,
                'category_id'=> 1,
                'name' => 'Africa Forex Awards',
                'image'=> 'https://res.cloudinary.com/calvin254/image/upload/v1658913219/ForexArena/cheers.jpg',
                'location'=> 'Nairobi',
                'type'=> 'free',
                'timeline'=> 'upcoming',
            ],
            [
                'id' => 2,
                'category_id' => 2,
                'name' => 'Multibank Forex Trading Competition',
                'image' => 'https://res.cloudinary.com/calvin254/image/upload/v1658921046/ForexArena/mutibank_forex_competition.jpg',
                'location' => 'Nairobi',
                'type' => 'free',
                'timeline' => 'past',
            ],
            [
                'id' => 3,
                'category_id' => 2,
                'name' => 'Mogul Trading Competition',
                'image' => 'https://res.cloudinary.com/calvin254/image/upload/v1658922521/ForexArena/mogul.jpg',
                'location' => 'Nairobi',
                'type' => 'free',
                'timeline' => 'past',
            ],
        ]);

    }
}
