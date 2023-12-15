<?php

namespace App\Imports;
ini_set('max_execution_time', '0');

use App\Models\StudyProgram;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class UserImport implements ToCollection, WithChunkReading
{
    private $importedCount = 0;

    public function collection(Collection $collection)
    {
        $collection->shift();

        $chunkSize = 200;
        $chunks = $collection->chunk($chunkSize);

        foreach ($chunks as $rows) {
            $usersData = [];

            foreach ($rows as $row) {
                $usersData[] = [
                    'nim' => (int) $row[2],
                    'name' => $row[3],
                    'email' => $this->createEmailFromNim($row[2]),
                    'password' => bcrypt((int) $row[2]),
                    'study_program_id' => $this->getStudyProgramId($row[4]),
                ];

                $this->importedCount++;

                if ($this->importedCount % 100 === 0) {
                    $this->logImportProgress();
                }
            }

            User::upsert($usersData, ['nim'], ['name', 'email', 'password', 'study_program_id']);
        }

        if ($this->importedCount % 100 !== 0) {
            $this->logImportProgress();
        }
    }

    public function chunkSize(): int
    {
        return 200;
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

    private function logImportProgress(): void
    {
        info("Imported $this->importedCount data");
    }
}



