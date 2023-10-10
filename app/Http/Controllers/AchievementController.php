<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Http\Requests\StoreAchievementRequest;
use App\Http\Requests\UpdateAchievementRequest;
use App\Models\StudyProgram;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AchievementController extends Controller
{
  /**
   * Display a listing of the resource.
   */

  public function index(): Response
  {

    $isAdmin = Auth::user()->role == 'admin';

    if ($isAdmin) {
      $achievements = Achievement::paginate(15);
      return response()->view('admin.achievements.index', compact('achievements'));
    }
    $achievements = Achievement::where('user_id', '=', Auth::user()->id)->paginate(5);

    return response()->view('achievements.index', compact('achievements'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(Response $response): Response
  {
    $study_program = StudyProgram::all();
    // dd($study_program);
    return response()->view('achievements.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreAchievementRequest $request): RedirectResponse
  {
    // dd($request->all());
    $score = $request->calculateScore(
      $request->input('description'),
      $request->input('competition_name'),
      $request->input('institute'),
      $request->input('level_id'),
      $request->input('rank_id')
    );

    $user_id = Auth::user()->id;

    $formatAndStoreFile = function ($fileInputName, $folderName, $achievementId) use ($user_id, $request) {
      $file = $request->file($fileInputName);
      $fileName = $user_id . '_' . $achievementId . '_' . $fileInputName . '.' . $file->getClientOriginalExtension();
      $userFolder = storage_path('app/public/' . $user_id . '/' . $achievementId);
      if (!file_exists($userFolder)) {
        mkdir($userFolder, 0777, true);
      }

      $file->storeAs("$user_id/$achievementId/$folderName", $fileName, 'public');

      return $fileName;
    };

    $achievementData = array_merge($request->validated(), ['score' => $score]);
    $newAchievement = Achievement::create($achievementData);
    $achievementId = $newAchievement->id;

    $achievementData['idea_file'] = $formatAndStoreFile('idea_file', 'idea', $achievementId);
    $achievementData['poster_file'] = $formatAndStoreFile('poster_file', 'poster', $achievementId);
    $achievementData['documentation_file'] = $formatAndStoreFile('documentation_file', 'documentation', $achievementId);
    $achievementData['certificate_file'] = $formatAndStoreFile('certificate_file', 'certificate', $achievementId);

    Achievement::find($achievementId)->update($achievementData);

    toast('Berhasil Upload!', 'success');
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
    toast('Berhasil menghapus prestasi', 'success');
    return redirect()->route('achievements.index');
  }
}
