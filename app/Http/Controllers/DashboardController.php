<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Competition;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fungsi menampilkan achievement dan competition terbaru
        $achievements = Achievement::orderBy('created_at', 'desc')->take(5)->get();
        $competitions = Competition::orderBy('created_at', 'desc')->take(5)->get();

        // Fungsi menampilkan user bedasarkan point tertinggi
        $users = User::orderBy('point')->get();

        //Return
        return response()->view('dashboard.index', compact('achievements', 'competitions', 'users'));


    }
}
