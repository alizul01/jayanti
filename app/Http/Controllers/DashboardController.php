<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Competition;
use App\Models\Rank;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $achievements = Achievement::orderBy('created_at', 'desc')->take(5)->get();
        $competitions = Competition::orderBy('created_at', 'desc')->take(3)->get();
        return response()->view('dashboard.index', compact('achievements', 'competitions'));
    }
}
