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
            'firstname' => 'Dia Ayu',
            'lastname' => 'Wulansari',
            'email' => 'diaayuwulansari@gmail.com',
            'age' => '20',
            'position_id' => 1
        ],
        [
            'firstname' => 'Nimas',
            'lastname' => 'Ayu',
            'email' => 'nimasayu@gmail.com',
            'age' => '12',
            'position_id' => 2
        ],
        [
            'firstname' => 'Arya',
            'lastname' => 'Bima',
            'email' => 'aryabima@gmail.com',
            'age' => '9',
            'position_id' => 9
        ],
        [
            'firstname' => 'Shakila',
            'lastname' => 'Orlin',
            'email' => 'shakilaorlin@gmail.com',
            'age' => '12',
            'position_id' => 7
        ],
    ]);
    }
}
