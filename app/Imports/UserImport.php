<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash; // Import class Hash untuk melakukan hashing password
use Maatwebsite\Excel\Concerns\ToCollection;

class UserImport implements ToCollection
{
    /**
     * @param  \Illuminate\Support\Collection  $collection
     * @return void
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            User::create([
                'nim' => $row[0], // Kolom 'nim'
                'name' => $row[1], // Kolom 'name'
                'email' => $row[2], // Kolom 'email'
                'password' => Hash::make($row[3]), // Kolom 'password' dienkripsi menggunakan Hash
                'role' => $row[4], // Kolom 'role'
                'study_program_id' => $row[5], // Kolom 'study_program_id'
            ]);
        }
    }
}
