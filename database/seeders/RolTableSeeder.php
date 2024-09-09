<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'rol' => 'Employer'
            ],
            [
                'rol' => 'Analyst'
            ]
        ];
        DB::table('rol')->insert($data);
    }
}
