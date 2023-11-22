<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;

class ExcelController extends Controller
{
  public function import(Request $request): \Illuminate\Http\RedirectResponse
  {
    $request->validate([
      'file' => 'required|mimes:xls,xlsx'
    ]);

    $path = $request->file('file')->getRealPath();
    dd($path);
    $data = Excel::import($path)->get();
    if ($data->count()) {
      foreach ($data as $key => $value) {
        $arr[] = [
          'name' => $value->name,
          'email' => $value->email,
          'password' => $value->password,
          'role' => $value->role,
          'study_program_id' => $value->study_program_id,
          'created_at' => $value->created_at,
          'updated_at' => $value->updated_at,
        ];
      }
      if (!empty($arr)) {
        User::insert($arr);
        return redirect()->back()->with('success', 'Data imported successfully');
      }
    }
    return redirect()->back()->with('error', 'Data imported failed');
  }
}
