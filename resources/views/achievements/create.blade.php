@extends('layout.user')

@section('content')
  <main class="flex flex-col gap-5 px-20 py-6 bg-gray-100">
    <h1 class="font-semibold text-2xl">Tambah Prestasi</h1>
    <hr class="border-t-2 border-gray-300">
    <form class="max-w-full flex flex-col gap-4 p-6 bg-white border border-gray-200 rounded-lg shadow"
      method="POST">
      @csrf
      <div>
        <label for="nama" class="block mb-2 font-medium text-gray-900">Nama</label>
        <input type="text" id="nama" name="nama"
          class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full"
          required>
      </div>
      <div>
        <label for="nim" class="block mb-2 font-medium text-gray-900">NIM</label>
        <input type="text" id="nim" name="nim"
          class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full"
          required>
      </div>
      <div>
        <label for="prodi" class="block mb-2 font-medium text-gray-900">Prodi</label>
        <input type="text" id="prodi" name="prodi"
          class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full"
          required>
      </div>
      <div>
        <label for="judul_kompetisi" class="block mb-2 font-medium text-gray-900">Judul Kompetisi<span
            class="text-red-600">*</span>
        </label>
        <input type="text" id="judul_kompetisi" name="judul_kompetisi"
          class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full"
          required>
      </div>
      <div>
        <label for="deskripsi" class="block mb-2 font-medium text-gray-900 dark:text-white">
          Deskripsi Kompetisi<span class="text-red-600">*</span>
        </label>
        <textarea id="deskripsi" rows="4"
          class="block p-2.5 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-300 focus:border-blue-300"
          required></textarea>
      </div>
      <div>
        <label for="instansi" class="block mb-2 font-medium text-gray-900">Instansi Penyelenggara<span
            class="text-red-600">*</span>
        </label>
        <input type="text" id="instansi" name="instansi"
          class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full"
          required>
      </div>
      <div class="flex gap-5">
        <div class="flex-1">
          <label for="tanggal_mulai" class="block mb-2 font-medium text-gray-900">Tanggal Mulai Pelaksanaan<span
              class="text-red-600">*</span>
          </label>
          <input type="date" id="tanggal_mulai" name="tanggal_mulai"
            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full"
            required>
        </div>
        <div class="flex-1">
          <label for="tanggal_selesai" class="block mb-2 font-medium text-gray-900">Tanggal Selesai
            Pelaksanaan<span class="text-red-600">*</span>
          </label>
          <input type="date" id="tanggal_selesai" name="tanggal_selesai"
            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full"
            required>
        </div>
      </div>
      <div>
        <label for="tingkat" class="block mb-2 font-medium text-gray-900">Tingkat<span
            class="text-red-600">*</span></label>
        <select id="tingkat" name="tingkat"
          class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full">
          <option selected>Pilih Tingkat Kompetisi</option>
          <option value="1">Lokal</option>
          <option value="2">Regional</option>
          <option value="3">Nasional</option>
          <option value="4">Internasional</option>
        </select>
      </div>
      <div>
        <label for="tingkat" class="block mb-2 font-medium text-gray-900">Peringkat<span
            class="text-red-600">*</span></label>
        <select id="tingkat" name="tingkat"
          class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full">
          <option selected>Pilih Peringkat</option>
          <option value="1">Juara I</option>
          <option value="1">Juara II</option>
          <option value="1">Juara III</option>
          <option value="2">Harapan</option>
          <option value="3">Favorit</option>
          <option value="4">Peserta</option>
        </select>
      </div>
      <div class="flex gap-5">
        <div class="flex-1">
          <label class="block mb-2 font-medium text-gray-900" for="file_input">
            File Ide/Karya<span class="text-yellow-300">*</span>
          </label>
          <input
            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full cursor-pointer"
            aria-describedby="file_input_help" id="file_input" type="file">
          <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
            PNG, JPG (MAX.800x400px).
          </p>
        </div>
        <div class="flex-1">
          <label class="block mb-2 font-medium text-gray-900" for="file_input">
            File Poster/Undangan Kompetisi<span class="text-red-600">*</span>
          </label>
          <input
            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full cursor-pointer"
            aria-describedby="file_input_help" id="file_input" type="file">
          <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
            PNG, JPG (MAX.800x400px).
          </p>
        </div>
      </div>
      <div class="flex gap-5">
        <div class="flex-1">
          <label class="block mb-2 font-medium text-gray-900" for="file_input">
            File Foto/Dokumentasi<span class="text-red-600">*</span>
          </label>
          <input
            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full cursor-pointer"
            aria-describedby="file_input_help" id="file_input" type="file">
          <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
            PNG, JPG (MAX.800x400px).
          </p>
        </div>
        <div class="flex-1">
          <label class="block mb-2 font-medium text-gray-900" for="file_input">
            File Sertifikat<span class="text-red-600">*</span>
          </label>
          <input
            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full cursor-pointer"
            aria-describedby="file_input_help" id="file_input" type="file">
          <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
            PNG, JPG (MAX.800x400px).
          </p>
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
  {{-- <form method="POST" action="{{ route('achievements.store') }}" class="achievement-form"
    enctype="multipart/form-data">
    @csrf
    <div class="achievement-form__container">
      <div class="grid gap-6 mb-6">
        <div>
          <label for="name" class="achievement-form__label">
            Name
          </label>
          <input type="text" id="name" class="achievement-form__input" placeholder="John" name="name"
            value="{{ Auth::user()->role == 'admin' ? '' : Auth::user()->name }}"
            {{ Auth::user()->role == 'admin' ? 'autofocus' : '' }}>
          @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="nim" class="achievement-form__label">
            NIM
          </label>
          <input type="text" id="nim" class="achievement-form__input" placeholder="123456789"
            name="nim" value="{{ Auth::user()->role == 'admin' ? '' : Auth::user()->nim }}"
            {{ Auth::user()->role == 'admin' ? 'autofocus' : '' }}>
          @error('nim')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="program_studi" class="achievement-form__label">
            Program Studi
          </label>
          <input type="text" id="program_studi" class="achievement-form__input"
            placeholder="Teknik Informatika" name="program_studi"
            value="{{ Auth::user()->role == 'admin' ? '' : Auth::user()->program_studi }}"
            {{ Auth::user()->role == 'admin' ? '' : 'disabled' }}>
          @error('program_studi')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="nama_kompetisi" class="achievement-form__label">
            Nama Kompetisi
          </label>
          <input type="text" id="nama_kompetisi" class="achievement-form__input" placeholder="Nama Kompetisi"
            name="nama_kompetisi">
        </div>
        <div>
          <label for="deskripsi_kompetisi" class="achievement-form__label">
            Deskripsi Kompetisi
          </label>
          <textarea id="deskripsi_kompetisi" class="achievement-form__input" placeholder="Deskripsi Kompetisi"
            name="deskripsi_kompetisi"></textarea>
        </div>
        <div>
          <label for="peringkat" class="achievement-form__label">
            Peringkat
          </label>
          <select id="peringkat" class="achievement-form__input" name="peringkat">
            <option value="">Pilih Peringkat</option>
            <option value="Juara 1">Juara 1</option>
            <option value="Juara 2">Juara 2</option>
            <option value="Juara 3">Juara 3</option>
            <option value="Juara Harapan Setara 1">Juara Harapan Setara 1</option>
            <option value="Juara Harapan Setara 2">Juara Harapan Setara 2</option>
            <option value="Juara Harapan Setara 3">Juara Harapan Setara 3</option>
            <option value="Juara Favorit">Juara Favorit</option>
            <option value="Juara Lainnya">Juara Lainnya</option>
            <option value="Peserta">Peserta</option>
          </select>
        </div>
        <div>
          <label for="file_ide" class="achievement-form__label">
            File IDE/Karya
          </label>
          <input type="file" id="file_ide" class="achievement-form__input" name="file_ide">
        </div>
        <div>
          <label for="file_poster" class="achievement-form__label">
            File Poster/Undangan Kompetisi
          </label>
          <input type="file" id="file_poster" class="achievement-form__input" name="file_poster">
        </div>
        <div>
          <label for="file_foto" class="achievement-form__label">
            File Foto/Dokumentasi
          </label>
          <input type="file" id="file_foto" class="achievement-form__input" name="file_foto">
        </div>
        <div>
          <label for="file_sertifikat" class="achievement-form__label">
            File Sertifikat
          </label>
          <input type="file" id="file_sertifikat" class="achievement-form__input" name="file_sertifikat">
        </div>
        <div>
          <label for="nama_instansi" class="achievement-form__label">
            Nama Instansi Penyelenggara
          </label>
          <input type="text" id="nama_instansi" class="achievement-form__input"
            placeholder="Nama Instansi Penyelenggara" name="nama_instansi">
        </div>
        <div>
          <label for="tingkat_kompetisi" class="achievement-form__label">
            Tingkat Kompetisi
          </label>
          <select id="tingkat_kompetisi" class="achievement-form__input" name="tingkat_kompetisi">
            <option value="">Pilih Tingkat Kompetisi</option>
            <option value="Lokal">Lokal</option>
            <option value="Regional">Regional</option>
            <option value="Nasional">Nasional</option>
            <option value="Internasional">Internasional</option>
          </select>
        </div>
        <div>
          <label for="tanggal_pelaksanaan" class="achievement-form__label">
            Tanggal Mulai - Tanggal Selesai Pelaksanaan
          </label>
          <input type="text" id="tanggal_pelaksanaan" class="achievement-form__input"
            placeholder="dd/mm/yyyy - dd/mm/yyyy" name="tanggal_pelaksanaan">
        </div>
      </div>
      <button type="submit" class="achievement-form__button">Submit</button>
    </div>
  </form> --}}
@endsection
