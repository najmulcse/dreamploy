<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'		=>'Admin',
            'email'		=>'admin@gmail.com',
            'user_type'	=>1,
            'password'	=>bcrypt('111111')
            ]); 

        DB::table('users')->insert([
            'name'		=>'Myshop',
            'email'		=>'myshop@gmail.com',
            'user_type'	=>0,
            'password'	=>bcrypt('000000')
            ]);
    }
}
