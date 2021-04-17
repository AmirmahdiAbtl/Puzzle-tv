<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'fname' => 'erfan',
            'lname'=>'mirzaee',
            'mobile'=>'09120643390',
            'email'=>'erfan.mirzaee8620@gmail.com',
            'password' => Hash::make('123456789'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('users')->insert([
            'fname' => 'faraz',
            'lname'=>'sadri',
            'mobile'=>'09392676126',
            'email'=>'ifarazir@gmail.com',
            'password' => Hash::make('123456789'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('roles')->insert([
            'name' => 'admin',
            'persian_name' => 'مدیر اصلی',
        ]);

        DB::table('role_user')->insert([
            'user_id'=>1,
            'role_id'=>1,
        ]);

        DB::table('role_user')->insert([
            'user_id'=>2,
            'role_id'=>1,
        ]);
    }
}
