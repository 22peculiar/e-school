<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
           
        //Admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'admin',
                'status' => 'active',
            ],

            //Teacher
            [
                'name' => 'Teacher',
                'username' => 'teacher',
                'email' => 'teacher@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'teacher',
                'status' => 'active',
            ],

            //Student
            [
                'name' => 'Student',
                'username' => 'student',
                'email' => 'student@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'student',
                'status' => 'active',
            ],
        ]);
    }
}
