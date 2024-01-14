<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCompetitionRequest extends FormRequest
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
   * @return array<string, Rule|array|string>
   */
  public function rules(): array
  {
    return [
      'name' => ['required', 'max:255'],
      'description' => ['required', 'max:1024'],
      'type' => ['required', 'string', 'max:255'],
      'province' => ['required', 'string', 'max:255'],
      'city' => ['required', 'string', 'max:255'],
      'organizer' => ['required', 'string', 'max:255'],
      'start_date' => ['required', 'date'],
      'end_date' => ['required', 'date', 'after_or_equal:start_date'],
    ];
  }

  /**
   * Get custom error messages for validator errors.
   *
   * @return array<string, string>
   */
  public function messages(): array
  {
    return [
      'name.required' => 'Kolom Nama Kompetisi wajib diisi.',
      'name.max' => 'Kolom Nama Kompetisi maksimal 255 karakter.',
      'description.required' => 'Kolom Deskripsi Kompetisi wajib diisi.',
      'description.max' => 'Kolom Deskripsi Kompetisi maksimal 1024 karakter.',
      'type.required' => 'Kolom Jenis Kompetisi wajib diisi.',
      'type.max' => 'Kolom Jenis Kompetisi maksimal 255 karakter.',
      'province.required' => 'Kolom Provinsi wajib diisi.',
      'province.max' => 'Kolom Provinsi maksimal 255 karakter.',
      'city.required' => 'Kolom Kota/Kabupaten wajib diisi.',
      'city.max' => 'Kolom Kota/Kabupaten maksimal 255 karakter.',
      'organizer.required' => 'Kolom Penyelenggara Kompetisi wajib diisi.',
      'organizer.max' => 'Kolom Penyelenggara Kompetisi maksimal 255 karakter.',
      'start_date.required' => 'Kolom Tanggal Mulai Kompetisi wajib diisi.',
      'start_date.date' => 'Kolom Tanggal Mulai Kompetisi harus berisi tanggal yang valid.',
      'end_date.required' => 'Kolom Tanggal Selesai Kompetisi wajib diisi.',
      'end_date.date' => 'Kolom Tanggal Selesai Kompetisi harus berisi tanggal yang valid.',
      'end_date.after_or_equal' => 'Kolom Tanggal Selesai Kompetisi harus setelah atau sama dengan Tanggal Mulai Kompetisi.',
    ];
  }
}
