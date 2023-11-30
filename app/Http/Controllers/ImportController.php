<?php

namespace App\Http\Controllers;

use App\Imports\UserImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function showUploadForm()
    {
        return view('admin.upload-excel.upload-form');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,xls,csv', // Validasi untuk tipe file Excel
        ]);

        $file = $request->file('excel_file');

        try {
            Excel::import(new UserImport, $file);

            return redirect()->back()->with('success', 'File berhasil diimpor ke model User.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
