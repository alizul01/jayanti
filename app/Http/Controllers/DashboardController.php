<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Competition;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
  public function index()
  {
    $ranks = Achievement::select('user_id', DB::raw('SUM(score) as total_score'), DB::raw('GROUP_CONCAT(name) as names'))
      ->groupBy('user_id')
      ->orderByDesc('total_score')
      ->paginate(5);
    $achievements = Achievement::orderBy('created_at', 'desc')->take(5)->get();
    $competitions = Competition::orderBy('created_at', 'desc')->take(3)->get();
    return response()->view('dashboard.index', compact('achievements', 'competitions', 'ranks'));
  }
}

