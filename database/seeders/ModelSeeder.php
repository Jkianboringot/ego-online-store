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
            ['id' => 1, 'maker_id' => 1, 'name' => 'Corolla'],
            ['id' => 2, 'maker_id' => 1, 'name' => 'Camry'],
            ['id' => 3, 'maker_id' => 2, 'name' => 'Civic'],
            ['id' => 4, 'maker_id' => 2, 'name' => 'Accord'],
        ]);
    }
}
