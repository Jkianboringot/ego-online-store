<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Model::insert([
            ['id' => 1, 'name' => 'Corolla', 'maker_id' => 1],
            ['id' => 2, 'name' => 'Camry', 'maker_id' => 1],
            ['id' => 3, 'name' => 'Civic', 'maker_id' => 2],
            ['id' => 4, 'name' => 'Accord', 'maker_id' => 2],
            ['id' => 5, 'name' => 'Altima', 'maker_id' => 3],
            ['id' => 6, 'name' => 'Sentra', 'maker_id' => 3],
            ['id' => 7, 'name' => 'CX-5', 'maker_id' => 4],
            ['id' => 8, 'name' => 'Mazda 3', 'maker_id' => 4],
            ['id' => 9, 'name' => 'Model 3', 'maker_id' => 9],
            ['id' => 10, 'name' => '320i', 'maker_id' => 10],
            ['id' => 11, 'name' => 'A3', 'maker_id' => 11],
            ['id' => 12, 'name' => 'A200', 'maker_id' => 12],
        ]);
    }
}
