<?php

namespace App\Imports;

use App\Models\StudyProgram;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;

class UserImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        $collection->shift();

        $chunkSize = 200;
        $chunks = $collection->chunk($chunkSize);

        foreach ($chunks as $rows) {
            $usersData = [];

            foreach ($rows as $row) {
                $usersData[] = [
                    'nim' => (int)$row[2],
                    'name' => $row[3],
                    'email' => $this->createEmailFromNim($row[2]),
                    'password' => Hash::make((int)$row[2]),
                    'study_program_id' => $this->getStudyProgramId($row[4]),
                ];
            }

            User::upsert($usersData, ['nim'], ['name', 'email', 'password', 'study_program_id']);
        }
    }

    private function getStudyProgramId(string $studyProgramName): int
    {
        $studyProgram = StudyProgram::where('name', $studyProgramName)->first();
        return $studyProgram ? $studyProgram->id : 0;
    }

    private function createEmailFromNim(string $nim): string
    {
        return $nim . '@student.polinema.ac.id';
    }
}

