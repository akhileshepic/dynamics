<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([

            'name' => 'admin',
            'role' => 'admin',
            'mobile' => 7004721231,
            'mobile_status' => 1,
            'email' => 'admin@gmail.com',
            'email_status' => 1,
            'password' => bcrypt('admin')

        ]);
    }
}