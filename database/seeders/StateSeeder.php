<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          State::insert([
            ['id' => 1, 'name' => 'California'],
            ['id' => 2, 'name' => 'Texas'],
            ['id' => 3, 'name' => 'new york'],
        ]);
    }
}
