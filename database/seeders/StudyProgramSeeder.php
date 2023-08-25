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
        'name' => 'D4 Teknik Informatika'
      ],
      [
        'name' => 'D4 Sistem Informasi Bisnis'
      ],
      [
        'name' => 'D2 Fast Track'
      ],
    ];

    foreach ($study as $item) {
      StudyProgram::create($item);
    }
  }
}
