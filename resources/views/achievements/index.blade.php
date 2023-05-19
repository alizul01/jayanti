@extends('layout.user')

@section('content')
  <main class="flex flex-col gap-5 px-20 py-6 bg-gray-100 h-screen">
    <h1 class="font-semibold text-3xl mx-auto tracking-wide">PRESTASI</h1>
    <hr class="border-t-2 border-gray-300">
    <a href="/" class="flex ml-auto">
      <button type="button"
        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
        Tambah Prestasi
      </button>
    </a>
    <div class="relative overflow-x-auto shadow-md rounded-lg">
      <table class="w-full text-base text-center text-gray-800">
        <thead class="text-gray-800 uppercase bg-gray-200">
          <tr>
            <th scope="col" class="px-2 py-3">
              No
            </th>
            <th scope="col" class="px-6 py-3">
              Kompetisi
            </th>
            <th scope="col" class="px-4 py-3">
              Peringkat
            </th>
            <th scope="col" class="px-1 py-3">
              Action
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white border-b border-gray-300">
            <td class="px-2 py-4">
              1
            </td>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
              Test
            </th>
            <td class="px-4 py-4">
              1
            </td>
            <td class="px-1 py-4">
              <div class="flex gap-3 justify-center">
                <button type="button"
                  class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-3 py-1 text-center">
                  <i class="bx bxs-show text-lg"></i>
                </button>
                <button type="button"
                  class="text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-3 py-1 text-center">
                  <i class="bx bxs-edit text-lg"></i>
                </button>
                <button type="button"
                  class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-3 py-1 text-center">
                  <i class="bx bx-trash text-lg"></i>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
@endsection
