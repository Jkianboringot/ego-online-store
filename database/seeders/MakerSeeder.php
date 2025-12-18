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
           ['id' => 1, 'name' => 'xmax'],
            ['id' => 2, 'name' => 'xmax'],
            ['id' => 3, 'name' => 'xmax'],
            ['id' => 4, 'name' => 'xmax'],
            ['id' => 5, 'name' => 'xmax'],
            ['id' => 6, 'name' => 'xmax'],
            ['id' => 7, 'name' => 'xmax'],
            ['id' => 8, 'name' => 'xmax'],
            ['id' => 9, 'name' => 'xmax'],
            ['id' => 10, 'name' => 'xmax'],
            ['id' => 11, 'name' => 'xmax'],
            ['id' => 12, 'name' => 'xmax-Benz'],
        ]);
    }
}
