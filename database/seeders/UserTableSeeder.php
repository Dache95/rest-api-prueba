<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nombre' => 'Daniel Paredes',
                'rol' => '1'
            ],
            [
                'nombre' => 'Francisco Suarez',
                'rol' => '1'
            ],
            [
                'nombre' => 'Alex Ruano',
                'rol' => '2'
            ]
        ];
        DB::table('user')->insert($data);
    }
}
