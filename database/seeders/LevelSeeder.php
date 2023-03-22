<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            'Internal',
            'Kota/Kabupaten',
            'Provinsi',
            'Nasional',
            'Internasional',
        ];

        foreach ($levels as $level) {
            Level::create([
                'name' => $level,
            ]);
        }
    }
}
