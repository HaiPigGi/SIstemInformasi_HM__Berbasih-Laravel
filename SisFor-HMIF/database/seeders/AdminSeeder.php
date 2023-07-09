<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ public function run()
    {
        DB::table('users')->insert([
            'name' => 'hmif21',
            'email' => 'hmif21@gmail.com',
            'password' => Hash::make('admin'),
            'telepon' => '089856472387',
            'role' => 'admin', // Set the role to "admin"
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
