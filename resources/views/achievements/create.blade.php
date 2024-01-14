@extends('layout.user')

@section('content')
  <main class="flex flex-col gap-5 px-20 py-6 bg-gray-100">
    <h1 class="font-semibold text-2xl">Tambah Prestasi</h1>
    <hr class="border-t-2 border-gray-300">
    <form action="{{ route('achievements.store') }}"
          class="max-w-full flex flex-col gap-4 p-6 bg-white border border-gray-200 rounded-lg shadow"
          method="POST" enctype="multipart/form-data">
      @csrf
      <div>
        <label for="username" class="block mb-2 font-medium text-gray-900">Nama</label>
        <input type="text" id="username"
               class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-purple-300 focus:border-purple-300 block w-full"
               value="{{Auth::user()->name}}" readonly
               required>
      </div>
      <div>
        <label for="nim" class="block mb-2 font-medium text-gray-900">NIM</label>
        <input type="text" id="nim"
               class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-purple-300 focus:border-purple-300 block w-full"
               value="{{Auth::user()->nim}}" readonly
               required>
      </div>
      <div>
        <label for="prodi" class="block mb-2 font-medium text-gray-900">Prodi</label>
        <input type="text" id="prodi"
               class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-purple-300 focus:border-purple-300 block w-full"
               value="{{Auth::user()->studyprograms->name}}" readonly
               required>
      </div>
      <div>
        <label for="name" class="block mb-2 font-medium text-gray-900">Judul Kompetisi<span
            class="text-red-600">*</span>
        </label>
        <input type="text" id="name" name="name"
               class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-purple-300 focus:border-purple-300 block w-full"
               value="{{old('name')}}"
               required>
      </div>
      <input hidden value="{{Auth::user()->id}}" name="user_id">
      <div>
        <label for="description" class="block mb-2 font-medium text-gray-900 dark:text-white">
          Deskripsi Kompetisi<span class="text-red-600">*</span>
        </label>
        <textarea id="description" name="description" rows="4"
                  class="block p-2.5 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-purple-300 focus:border-purple-300"
                  required>{{old('description')}}</textarea>
      </div>
      <div>
        <label for="organizer" class="block mb-2 font-medium text-gray-900">Instansi Penyelenggara<span
            class="text-red-600">*</span>
        </label>
        <input type="text" id="organizer" name="organizer"
               class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-purple-300 focus:border-purple-300 block w-full"
               value="{{old('organizer')}}"
               required>
      </div>
      <div>
        <label for="location" class="block mb-2 font-medium text-gray-900">Lokasi Lomba<span
            class="text-red-600">*</span>
        </label>
        <input type="text" id="location" name="location"
               class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-purple-300 focus:border-purple-300 block w-full"
               value="{{old('location')}}"
               required>
      </div>
      <div class="flex gap-5">
        <div class="flex-1">
          <label for="start_date" class="block mb-2 font-medium text-gray-900">Tanggal Mulai Pelaksanaan<span
              class="text-red-600">*</span>
          </label>
          <input type="date" id="start_date" name="start_date"
                 class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-purple-300 focus:border-purple-300 block w-full"
                 value="{{old('start_date')}}"
                 required>
        </div>
        <div class="flex-1">
          <label for="end_date" class="block mb-2 font-medium text-gray-900">Tanggal Selesai
            Pelaksanaan<span class="text-red-600">*</span>
          </label>
          <input type="date" id="end_date" name="end_date"
                 class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-purple-300 focus:border-purple-300 block w-full"
                 value="{{old('end_date')}}"
                 required>
        </div>
      </div>
      <div>
        <label for="level_id" class="block mb-2 font-medium text-gray-900">Tingkat<span
            class="text-red-600">*</span></label>
        <select id="level_id" name="level_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-purple-300 focus:border-purple-300 block w-full">
          <option selected>Pilih Tingkat Kompetisi</option>
          <option value="1">Internasional</option>
          <option value="2">Nasional</option>
          <option value="3">Lokal</option>
        </select>
      </div>
      <div>
        <label for="rank_id" class="block mb-2 font-medium text-gray-900">Peringkat<span
            class="text-red-600">*</span></label>
        <select id="rank_id" name="rank_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-purple-300 focus:border-purple-300 block w-full">
          <option selected>Pilih Peringkat</option>
          <option value="1">Juara I</option>
          <option value="2">Juara II</option>
          <option value="3">Juara III</option>
          <option value="4">Harapan</option>
          <option value="5">Best</option>
        </select>
      </div>
      <h2 class="font-semibold text-xl mb-2 mt-8">
        File Pendukung
      </h2>
      <div class="flex gap-5">
        <div class="flex-1">
          <label class="block mb-2 font-medium text-gray-900" for="idea_file">
            File Ide atau Karya<span class="text-yellow-300">*</span>
          </label>
          <input
            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-purple-300 focus:border-purple-300 block w-full cursor-pointer"
            name="idea_file"
            aria-describedby="idea_file_help" id="idea_file" type="file">
          @error('idea_file')
          <p class="text-red-600">{{ $message }}</p>
          @enderror
          <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="idea_file_help">
            PDF (MAX. 2mb)
          </p>
        </div>
        <div class="flex-1">
          <label class="block mb-2 font-medium text-gray-900" for="poster_file">
            File Poster/Undangan Kompetisi<span class="text-red-600">*</span>
          </label>
          <input
            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-purple-300 focus:border-purple-300 block w-full cursor-pointer"
            name="poster_file"
            aria-describedby="poster_file_help" id="poster_file" type="file">
          @error('poster_file')
          <p class="text-red-600">{{ $message }}</p>
          @enderror
          <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="poster_file_help">
            PNG, JPG (MAX.800x400px).
          </p>
        </div>
      </div>
      <div class="flex gap-5">
        <div class="flex-1">
          <label class="block mb-2 font-medium text-gray-900" for="documentation_file">
            File Foto/Dokumentasi<span class="text-red-600">*</span>
          </label>
          <input
            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-purple-300 focus:border-purple-300 block w-full cursor-pointer"
            name="documentation_file"
            aria-describedby="documentation_file_help" id="documentation_file" type="file">
          @error('documentation_file')
          <p class="text-red-600">{{ $message }}</p>
          @enderror
          <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="documentation_file_help">
            PNG, JPG (MAX.800x400px).
          </p>
        </div>
        <div class="flex-1">
          <label class="block mb-2 font-medium text-gray-900" for="certificate_file">
            File Sertifikat<span class="text-red-600">*</span>
          </label>
          <input
            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-purple-300 focus:border-purple-300 block w-full cursor-pointer"
            name="certificate_file"
            aria-describedby="certificate_file_help" id="certificate_file" type="file"
            value="{{old('certificate_file')}}">
          @error('certificate_file')
          <p class="text-red-600">{{ $message }}</p>
          @enderror
          <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="certificate_file_help">
            PDF (MAX. 2mb)
          </p>
        </div>
      </div>
      <div class="flex ml-auto">
        <button type="submit"
                class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-purple-800">
          Submit
        </button>
      </div>
    </form>

  </main>
@endsection
