<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'becca',
                'email' => 'becca@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => '0707022351'
            ],
            [
                'name' => 'Ichangai',
                'email' => 'ichangaigitundu@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => '0741976860'
            ],
            [
                'name' => 'john',
                'email' => 'johnsonichangai@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => '0707022354'
            ],
        ]);
    }
}
