<?php

namespace App\Http\Controllers;

use App\Imports\UserImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function showUploadForm()
    {
        return view('admin.upload.upload-form');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,xls,csv', // Validasi untuk tipe file Excel
        ]);

        $file = $request->file('excel_file');

        try {
            Excel::import(new UserImport, $file);

            toast('File berhasil diimport ke model User.', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            toast('Terjadi kesalahan: ' . $e->getMessage(), 'error');
            return redirect()->back();
        }
    }
}
