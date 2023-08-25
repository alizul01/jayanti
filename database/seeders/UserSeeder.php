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
        'email' => 'admin@gmail.com',
        'nim' => 00000000,
        'study_program_id' => 1,
        'password' => Hash::make('password'),
        'role' => 'admin',
        'remember_token' => Str::random(10),
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'name' => 'Ali Zulfikar',
        'nim' => 2141720000,
        'email' => 'ali@example.com',
        'study_program_id' => 1,
        'password' => Hash::make('password'),
        'role' => 'user',
        'remember_token' => Str::random(10),
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'name' => 'Alfan Olivan',
        'nim' => 2141720001,
        'email' => 'alfan@example.com',
        'study_program_id' => 1,
        'password' => Hash::make('password'),
        'role' => 'user',
        'remember_token' => Str::random(10),
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'name' => 'Agilar',
        'nim' => 2141720002,
        'email' => 'agilar@example.com',
        'study_program_id' => 1,
        'password' => Hash::make('password'),
        'role' => 'user',
        'remember_token' => Str::random(10),
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'name' => 'Gabriel Dimas',
        'nim' => 2141720003,
        'email' => 'gabriel@example.com',
        'study_program_id' => 1,
        'password' => Hash::make('password'),
        'role' => 'user',
        'remember_token' => Str::random(10),
        'created_at' => now(),
        'updated_at' => now(),
      ],
    ]);
  }
}
