<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAchievementRequest extends FormRequest
{
  public function authorize(): true
  {
    // Define authorization logic here if needed
    return true;
  }

  public function rules(): array
  {
    return [
      'name' => ['required', 'max:255'],
      'description' => ['required', 'max:1024'],
      'level_id' => ['required', 'integer', 'exists:levels,id'],
      'rank_id' => ['required', 'integer', 'exists:ranks,id'],
      'location' => ['required', 'string', 'max:255'],
      'organizer' => ['required', 'string', 'max:255'],
      'start_date' => ['required', 'date'],
      'end_date' => ['required', 'date', 'after_or_equal:start_date'],
      'idea_file' => ['nullable', 'file', 'max:2048', 'mimes:pdf'],
      'poster_file' => ['nullable', 'file', 'max:2048', 'mimes:png,jpg'],
      'documentation_file' => ['nullable', 'file', 'max:2048', 'mimes:png,jpg'],
      'certificate_file' => ['nullable', 'file', 'max:2048', 'mimes:pdf'],
      'score' => ['nullable', 'numeric'],
    ];
  }
}
