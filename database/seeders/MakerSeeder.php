<?php

namespace Database\Seeders;

use App\Models\Maker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Maker::insert([
            ['id' => 1, 'name' => 'Toyota'],
            ['id' => 2, 'name' => 'Honda'],
        ]);
    }
}
