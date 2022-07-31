<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456')
            ],
            [
                'name' => 'Calvin Kirochi',
                'email' => 'calvinkirochi254@gmail.com',
                'password' => Hash::make('forexarena254')
            ],
            [
                'name' => 'Ichangai',
                'email' => 'ichangaigitundu@gmail.com',
                'password' => Hash::make('123456')
            ],
        ]);
    }
}
