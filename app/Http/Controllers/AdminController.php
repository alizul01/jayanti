<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Competition;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

  public function index()
  {
    $ranks = Achievement::select('user_id', DB::raw('SUM(score) * 10 as total_score'), DB::raw('GROUP_CONCAT(name) as names'))
      ->groupBy('user_id')
      ->paginate(10);
    $competitions = Competition::all();
    $achievements = Achievement::all();
    return view('admin.index', compact('ranks', 'competitions', 'achievements'));
  }

  public function rank()
  {
    $ranks = Achievement::select('user_id', DB::raw('SUM(score) * 10 as total_score'), DB::raw('GROUP_CONCAT(name) as names'))
      ->groupBy('user_id')
      ->paginate(5);
    return view('admin.index', compact('ranks'));
  }
}
