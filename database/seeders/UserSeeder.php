<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    // { User::truncate();
        {
        DB::table('users')->insert([
            'name' => 'alaa',
            'email' => 'alaa@gmail.com',
            'password' => Hash::make('1234')
        ]);
    
    DB::table('users')->insert([
        'name' => 'ahmed',
        'email' => 'ahmed@gmail.com',
        'password' => Hash::make('1234')
    ]);

DB::table('users')->insert([
    'name' => 'aya',
    'email' => 'aya@gmail.com',
    'password' => Hash::make('1234')
]);
DB::table('users')->insert([
    'name' => 'asmaa',
    'email' => 'asmaa@gmail.com',
    'password' => Hash::make('1234')
]);


    }}