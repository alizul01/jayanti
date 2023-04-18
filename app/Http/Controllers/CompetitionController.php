<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Http\Requests\StoreCompetitionRequest;
use App\Http\Requests\UpdateCompetitionRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response()->view('competitions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view('competitions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompetitionRequest $request): RedirectResponse
    {
        Competition::create($request->validated());
        return redirect()->route('competitions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Competition $competition): Response
    {
        return response()->view('competitions.show', compact('competition'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Competition $competition): Response
    {
        return response()->view('competitions.edit', compact('competition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompetitionRequest $request, Competition $competition): RedirectResponse
    {
        $competition->update($request->validated());
        return redirect()->route('competitions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Competition $competition): RedirectResponse
    {
        $competition->delete();
        return redirect()->route('competitions.index');
    }
}
