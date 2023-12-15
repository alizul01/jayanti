<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

  public function index()
  {
    $ranks = Achievement::select('user_id', DB::raw('SUM(score) as total_score'), DB::raw('GROUP_CONCAT(name) as names'))
      ->groupBy('user_id')
      ->get(5);
    return view('admin.index', compact('ranks'));
  }

  public function rank()
  {
    $ranks = Achievement::select('user_id', DB::raw('SUM(score) as total_score'), DB::raw('GROUP_CONCAT(name) as names'))
      ->groupBy('user_id')
      ->paginate(5);
    return view('admin.index', compact('ranks'));
  }
}
