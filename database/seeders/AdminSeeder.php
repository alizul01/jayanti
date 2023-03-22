<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@jayanti.com',
                'password' => bcrypt('password'),
                'role' => 'superadmin',
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@jayanti.com',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ],
        ];

        foreach ($admins as $admin) {
            Admin::create($admin);
        }
    }
}
