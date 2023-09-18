@extends('layout.user')

@section('content')
  <main class="flex flex-col gap-5 px-20 py-6 bg-gray-100">
    <h1 class="font-semibold text-2xl">Tambah Prestasi</h1>
    <hr class="border-t-2 border-gray-300">
    <form action="{{ route('achievements.update', $achievement) }}"
          class="max-w-full flex flex-col gap-4 p-6 bg-white border border-gray-200 rounded-lg shadow"
          method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div>
        <label for="username" class="block mb-2 font-medium text-gray-900">Nama</label>
        <input type="text" id="username"
               class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full"
               value="{{Auth::user()->name}}" readonly
               required>
      </div>
      <div>
        <label for="nim" class="block mb-2 font-medium text-gray-900">NIM</label>
        <input type="text" id="nim"
               class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full"
               value="{{Auth::user()->nim}}" readonly
               required>
      </div>
      <div>
        <label for="prodi" class="block mb-2 font-medium text-gray-900">Prodi</label>
        <input type="text" id="prodi"
               class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full"
               value="{{Auth::user()->studyprograms->name}}" readonly
               required>
      </div>
      <div>
        <label for="name" class="block mb-2 font-medium text-gray-900">Judul Kompetisi<span
            class="text-red-600">*</span>
        </label>
        <input type="text" id="name" name="name"
               class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full"
               value="{{old('name', $achievement->name)}}"
               required>
      </div>
      <input hidden value="{{Auth::user()->id}}" name="user_id">
      <div>
        <label for="description" class="block mb-2 font-medium text-gray-900 dark:text-white">
          Deskripsi Kompetisi<span class="text-red-600">*</span>
        </label>
        <textarea id="description" name="description" rows="4"
                  class="block p-2.5 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-300 focus:border-blue-300"
                  required>{{ old('description', $achievement->description) }}</textarea>
      </div>
      <div>
        <label for="organizer" class="block mb-2 font-medium text-gray-900">Instansi Penyelenggara<span
            class="text-red-600">*</span>
        </label>
        <input type="text" id="organizer" name="organizer"
               class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full"
               value="{{old('organizer', $achievement->organizer)}}"
               required>
      </div>
      <div>
        <label for="location" class="block mb-2 font-medium text-gray-900">Lokasi Lomba<span
            class="text-red-600">*</span>
        </label>
        <input type="text" id="location" name="location"
               class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full"
               value="{{old('location', $achievement->location)}}"
               required>
      </div>
      <div class="flex gap-5">
        <div class="flex-1">
          <label for="start_date" class="block mb-2 font-medium text-gray-900">Tanggal Mulai Pelaksanaan<span
              class="text-red-600">*</span>
          </label>
          <input type="date" id="start_date" name="start_date"
                 class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full"
                 value="{{$achievement->start_date}}"
                 required>
        </div>
        <div class="flex-1">
          <label for="end_date" class="block mb-2 font-medium text-gray-900">Tanggal Selesai
            Pelaksanaan<span class="text-red-600">*</span>
          </label>
          <input type="date" id="end_date" name="end_date"
                 class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full"
                 value="{{$achievement->end_date}}"
                 required>
        </div>
      </div>
      <div>
        <label for="level_id" class="block mb-2 font-medium text-gray-900">Tingkat<span
            class="text-red-600">*</span></label>
        <select id="level_id" name="level_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full">
          <option value="1" {{ $achievement->level_id == 1 ? 'selected' : '' }}>Internasional</option>
          <option value="2" {{ $achievement->level_id == 2 ? 'selected' : '' }}>Nasional</option>
          <option value="3" {{ $achievement->level_id == 3 ? 'selected' : '' }}>Lokal</option>
        </select>

      </div>
      <div>
        <label for="rank_id" class="block mb-2 font-medium text-gray-900">Peringkat<span
            class="text-red-600">*</span></label>
        <select id="rank_id" name="rank_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full">
          <option value="1" {{ $achievement->rank_id == 1 ? 'selected' : '' }}>Juara I</option>
          <option value="2" {{ $achievement->rank_id == 2 ? 'selected' : '' }}>Juara II</option>
          <option value="3" {{ $achievement->rank_id == 3 ? 'selected' : '' }}>Juara III</option>
          <option value="4" {{ $achievement->rank_id == 4 ? 'selected' : '' }}>Harapan</option>
          <option value="5" {{ $achievement->rank_id == 5 ? 'selected' : '' }}>Best</option>
        </select>
      </div>
      <div class="flex flex-col gap-5">
        <div>
          <div class="flex-1">
            <label class="block mb-2 font-medium text-gray-900" for="idea_file">
              File Ide/Karya<span class="text-yellow-300">*</span>
            </label>
            <div class="hover:bg-blue-100 p-2 rounded-lg flex flex-row gap-4">
              <img src="{{ asset('img/svg/pdf.svg') }}" alt="PDF Icon" class="w-6 h-6">
              <a
                href="{{ asset('storage/' . $achievement->user_id . '/' . $achievement->id . '/idea/' . $achievement->iea_file) }}"
                target="_blank"
                class="text-blue-500 hover:text-blue-700">File Sertifikat</a>
            </div>
          </div>
          <div class="flex-1">
            <label class="block mb-2 font-medium text-gray-900" for="certificate_file">
              File Sertifikat<span class="text-red-600">*</span>
            </label>
            <div class="hover:bg-blue-100 p-2 rounded-lg flex flex-row gap-4">
              <img src="{{ asset('img/svg/pdf.svg') }}" alt="PDF Icon" class="w-6 h-6">
              <a
                href="{{ asset('storage/' . $achievement->user_id . '/' . $achievement->id . '/certificate/' . $achievement->certificate_file) }}"
                target="_blank"
                class="text-blue-500 hover:text-blue-700">File Sertifikat</a>
            </div>
          </div>
        </div>
        <div>
          <div class="flex-1">
            <label class="block mb-2 font-medium text-gray-900" for="poster_file">
              File Poster/Undangan Kompetisi<span class="text-red-600">*</span>
            </label>
            <img
              src="{{ asset('storage/' . $achievement->user_id . '/' . $achievement->id . '/poster/' . $achievement->poster_file) }}"
              alt="Uploaded Image" class="max-w-full h-auto w-96 rounded-md">
          </div>
          <div class="flex-1">
            <label class="block mb-2 font-medium text-gray-900" for="documentation_file">
              File Foto/Dokumentasi<span class="text-red-600">*</span>
            </label>
            <div class="flex gap-2 items-center">
              <div>
                <img
                  src="{{ asset('storage/' . $achievement->user_id . '/' . $achievement->id . '/documentation/' . $achievement->documentation_file) }}"
                  alt="Uploaded Image" class="max-w-full h-auto w-96 rounded-md">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex ml-auto">
        <button type="submit"
                class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
          Submit
        </button>
      </div>
    </form>

  </main>
@endsection
