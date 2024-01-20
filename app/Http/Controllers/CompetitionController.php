<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AdminMiddleware;
use App\Models\Competition;
use App\Http\Requests\StoreCompetitionRequest;
use App\Http\Requests\UpdateCompetitionRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http; // Add this line


class CompetitionController extends Controller
{
  public function __construct()
  {
    $this->middleware(AdminMiddleware::class)->except('index');
  }

  /**
   * Display a listing of the resource.
   */
  public function index(): Response
  {
    $roles = Auth::user()->role;
    $competitions = Competition::paginate(5);

    if ($roles == 'admin') {
      return response()->view('admin.competitions.index', compact('competitions'));
    }
    return response()->view('competitions.index', compact('competitions'));
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
    toast('Kompetisi berhasil ditambahkan', 'success');
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
    $competition = Competition::findOrFail($competition->id);
    $provinces = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json')->json();
      //   $regencies =array_map(function ($item) {
      //     return $item['name'];
      // }, $provinces);
      // dd($provinces);
    return response()->view('competitions.edit', compact('competition','provinces'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateCompetitionRequest $request, Competition $competition): RedirectResponse
  {
    $request->validate([
      'name' => 'required|string|max:255',
      'description' => 'nullable|string',
      'type' => 'required|string|max:255',
      'province' => 'required|string|max:255',
      'city' => 'required|string|max:255',
      'organizer' => 'required|string|max:255',
      'start_date' => 'required|date',
      'end_date' => 'required|date|after_or_equal:start_date',
  ]);
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
