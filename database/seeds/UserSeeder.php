<?php

use Illuminate\Database\Seeder;

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
            ['id'=> 1, 'name' => 'usuario1', 'email'=> 'usuario1@prueba.com', 'password' => bcrypt(12345)],
            ['id'=> 2, 'name' => 'usuario2', 'email'=> 'usuario2@prueba.com', 'password' => bcrypt(12345)],
            ['id'=> 3, 'name' => 'usuario3', 'email'=> 'usuario3@prueba.com', 'password' => bcrypt(12345)],
	    ]);
    }
}
