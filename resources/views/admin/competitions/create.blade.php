@extends('layout.admin')

@section('content')
  <div class="bg-white p-5 relative max-h-screen overflow-x-auto shadow-md sm:rounded-lg">
    <h1 class="text-2xl font-semibold text-left text-gray-900">
      Tambah Kompetisi
    </h1>
    <form class="my-5">
      <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
          Nama Kompetisi
        </label>
        <input type="text" id="name"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          required>
      </div>
      <div class="mb-6">
        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">
          Deskripsi Kompetisi
        </label>
        <textarea
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          name="deskripsi" id="" rows="3"></textarea>
      </div>
      <div class="mb-6">
        <label for="date" class="block mb-2 text-sm font-medium text-gray-900">
          Tanggal Kompetisi
        </label>
        <div class="flex justify-between items-center gap-3">
          <input type="date" id="date" name="start_date"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            required>
          <p>Sampai</p>
          <input type="date" id="date" name="end_date"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            required>
        </div>
      </div>
      <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
        Tambah
      </button>
    </form>

  </div>
@endsection
