<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            //Admin
            [
                'user_type'=>'admin',
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('1234'),
            ],

           //Vendor
            [
            
                'user_type'=>'seller',
                'name'=>'Seller',
                'email'=>'vendor@gmail.com',
                'password'=>Hash::make('1234'),

            ],

           //Customer
            [
                'user_type'=>'customer',
                'name'=>'Customer',
                'email'=>'customer@gmail.com',
                'password'=>Hash::make('1234'),

            ],
        ]);
    }
}
