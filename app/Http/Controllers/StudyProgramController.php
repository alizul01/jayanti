<?php

namespace App\Http\Controllers;

use App\Models\StudyProgram;
use App\Http\Requests\StoreStudyProgramRequest;
use App\Http\Requests\UpdateStudyProgramRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class StudyProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudyProgramRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StudyProgram $studyProgram): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudyProgram $studyProgram): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudyProgramRequest $request, StudyProgram $studyProgram): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudyProgram $studyProgram): RedirectResponse
    {
        //
    }
}
