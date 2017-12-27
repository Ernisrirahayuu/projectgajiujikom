<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
        	'name' => 'admin',
        	'email' => 'erni@example.com',
        	'password' => bcrypt('samsung18'),
        	'permission' => 'super_admin',
        	]);
    }
}
