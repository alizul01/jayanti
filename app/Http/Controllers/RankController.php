<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AdminMiddleware;
use App\Models\Achievement;
use App\Models\Rank;
use App\Http\Requests\StoreRankRequest;
use App\Http\Requests\UpdateRankRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class RankController extends Controller
{
  public function __construct()
  {
    $this->middleware(AdminMiddleware::class)->only('create');
  }

  /**
   * Display a listing of the resource.
   */
  public function index(): Response
  {
    $ranks = Achievement::select('user_id', DB::raw('SUM(score) as total_score'), DB::raw('GROUP_CONCAT(name) as names'))
      ->groupBy('user_id')
      ->paginate(15);

    return response()->view('ranks.index', compact('ranks'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(): Response
  {
    return response()->view('ranks.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreRankRequest $request): RedirectResponse
  {
    $rank = Rank::create($request->validated());
    return redirect()->route('ranks.index')->with('success', "Rank {$rank->name} created successfully.");
  }

  /**
   * Display the specified resource.
   */
  public function show(Rank $rank): Response
  {
    return response()->view('ranks.show', compact('rank'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Rank $rank): Response
  {
    return response()->view('ranks.edit', compact('rank'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateRankRequest $request, Rank $rank): RedirectResponse
  {
    $rank->update($request->validated());
    return redirect()->route('ranks.index')->with('success', "Rank {$rank->name} updated successfully.");
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Rank $rank): RedirectResponse
  {
    $rank->delete();
    return redirect()->route('ranks.index')->with('success', "Rank {$rank->name} deleted successfully.");
  }
}
