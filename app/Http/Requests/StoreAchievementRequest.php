<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAchievementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1024'],
            'level_id' => ['required', 'integer', 'exists:levels,id'],
            'rank_id' => ['required', 'integer', 'exists:ranks,id'],
            'type' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'organizer' => ['required', 'string', 'max:255'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date', 'after_or_equal:date'],
            'documentation_file' => ['nullable', 'file', 'max:1024'],
            'certificate_file' => ['nullable', 'file', 'max:1024'],
            'results_url' => ['nullable', 'url', 'max:255'],
        ];
    }
}
