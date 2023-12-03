<?php

namespace Database\Seeders;

use App\Models\StudyProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudyProgramSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $study = [
      [
        'name' => 'D-IV T. Informatika'
      ],
      [
        'name' => 'D-IV Sistem Informasi Bisnis'
      ],
      [
        'name' => 'D-II Pengembangan Perangkat (Piranti) Lunak Situs'
      ],
    ];

    foreach ($study as $item) {
      StudyProgram::create($item);
    }
  }
}
