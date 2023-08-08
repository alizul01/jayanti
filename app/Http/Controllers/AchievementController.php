<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Http\Requests\StoreAchievementRequest;
use App\Http\Requests\UpdateAchievementRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $achievements = Achievement::paginate(6);
        return response()->view('achievements.index', compact('achievements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Response $response): Response
    {
        return response()->view('achievements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAchievementRequest $request): RedirectResponse
    {
        Achievement::create($request->validated());
        return redirect()->route('achievements.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Achievement $achievement): Response
    {
        return response()->view('achievements.show', compact('achievement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Achievement $achievement): Response
    {
        return response()->view('achievements.edit', compact('achievement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAchievementRequest $request, Achievement $achievement): RedirectResponse
    {
        $achievement->update($request->validated());
        return redirect()->route('achievements.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Achievement $achievement): RedirectResponse
    {
        $achievement->delete();
        return redirect()->route('achievements.index');
    }
}
