<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        /*
        |
        | Populate Data in User table
        | Populate basic admin with credentials
        |    
        */
        
        /*------------------Super ADMIN-------------------------*/
        
        DB::table('users')->insert([
            'name' => 'Jobayed Sumon',
            'email' => 'jobayed@vmsl.com.bd',
            'email_verified_at' => '2020-01-01',
            'phone_number' => '01677242853',
            'password' => '11111111',
            'user_level' => '1',
            //'name' => '',
            //'name' => '',
        ]);
        
        /*------------------ADMIN-------------------------*/
        
//        DB::table('categories')->insert([
//            'name' => '',
//            'email' => '',
//            'email_verified_at' => '',
//            'phone_number' => '',
//            'password' => '',
//            'user_level' => '',
//            //'name' => '',
//            //'name' => '',
//        ]);
        
        /*------------------Site OPerator-------------------------*/
        
//        DB::table('categories')->insert([
//            'name' => '',
//            'email' => '',
//            'email_verified_at' => '',
//            'phone_number' => '',
//            'password' => '',
//            'user_level' => '',
//            //'name' => '',
//            //'name' => '',
//        ]);
        
    }
}
