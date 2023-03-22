<?php

namespace Database\Seeders;

use App\Models\Rank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ranks = [
            'Juara 1',
            'Juara 2',
            'Juara 3',
            'Juara Harapan 1',
            'Juara Harapan 2',
            'Juara Harapan 3',
            'Peserta',
        ];

        foreach ($ranks as $rank) {
            Rank::create([
                'name' => $rank,
            ]);
        }
    }
}
