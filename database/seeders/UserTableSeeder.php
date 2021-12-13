<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'tester',
            'email'=>'admin@gmail.com',
            'email_confirm'=>'57e88e0b5a69b56479cf42f355e906e072b59d2ab79da29d02fa0a97113f808c',
            'image'=>null,
            'point'=>'80000',
            'credit'=>'7000',
            'role'=>'admin',
            'currency'=>'USD',
            'trusted_customer'=>0,
            'phone'=>null,
            'publisher_name'=>'Ubisoft Publisher',
            'publisher_payment_currency'=>'GBP',
            'publisher_payment_method'=>'PayPal',
            'last_online'=>time().now(),
            'password'=>Hash::make('secret'),
        ]);
    }
}
