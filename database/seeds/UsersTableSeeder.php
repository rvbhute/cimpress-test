<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rohit Admin',
            'email' => 'rohit.admin@gmail.com',
            'password' => bcrypt('secret'),
			'user_type' => 'admin'
        ]);
		
		DB::table('users')->insert([
            'name' => 'Rohit User',
            'email' => 'rohit.user@gmail.com',
            'password' => bcrypt('secret'),
			'user_type' => 'user'
        ]);
    }
}