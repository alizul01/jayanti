<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('users')->insert([
      [
        'name' => 'Admin',
        'email' => 'admin@jayanti.com',
        'nim' => 00000000,
        'study_program_id' => 1,
        'password' => Hash::make('Jayanti2023#'),
        'role' => 'admin',
        'remember_token' => Str::random(10),
        'created_at' => now(),
        'updated_at' => now(),
      ]
    ]);
  }
}
