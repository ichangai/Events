<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('brokers')->insert([
            [
                'event_id' => 1,
                'name' => 'Rebeca Becca',
                'email' => 'becky@gmail.com',
                'image' => 'https://res.cloudinary.com/calvin254/image/upload/v1659520364/Forex%20Brokers/broker-2.png'
            ],
            [
                'event_id' => 1,
                'name' => 'Mike',
                'email' => 'mike@gmail.com',
                'image' => 'https://res.cloudinary.com/calvin254/image/upload/v1659520346/Forex%20Brokers/broker-3.jpg'
            ],
            [
                'event_id' => 1,
                'name' => 'wesley',
                'email' => 'wesley@gmail.com',
                'image' => 'https://res.cloudinary.com/calvin254/image/upload/v1659520329/Forex%20Brokers/broker-4.jpg'
            ],
            [
                'event_id' => 1,
                'name' => 'Susan',
                'email' => 'susan@gmail.com',
                'image' => 'https://res.cloudinary.com/calvin254/image/upload/v1659520368/Forex%20Brokers/broker-one.jpg'
            ],
         ]);
    }
}
