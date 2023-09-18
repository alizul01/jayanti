<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AdminMiddleware;
use App\Models\Competition;
use App\Http\Requests\StoreCompetitionRequest;
use App\Http\Requests\UpdateCompetitionRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

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
    $competition = Competition::paginate(5);

    if ($roles == 'admin') {
      return response()->view('admin.competitions.index', compact('competition'));
    }
    return response()->view('competitions.index', compact('competition'));
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
