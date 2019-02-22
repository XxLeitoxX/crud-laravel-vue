<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Leonardo',
        	'email' => 'leonardojgimenez@gmail.com',
        	'password' => bcrypt(value: '123456')
        ]);
    }
}
