<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Raihan',
                'lastname' => 'Dhani',
                'email' => 'Raihan@gmail.com',
                'age' => 20,
                'position_id' => 1
            ],
            [
                'firstname' => 'Bagas',
                'lastname' => 'Adhe',
                'email' => 'bagas@gmail.com',
                'age' => 25,
                'position_id' => 2
            ],
            [
                'firstname' => 'Gellang',
                'lastname' => 'Adie',
                'email' => 'gellang@gmail.com',
                'age' => 23,
                'position_id' => 3
            ],
        ]);
    }
}
