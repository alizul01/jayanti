@extends('layout.admin')

@section('content')
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <caption
        class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
        Prestasi Mahasiswa
      </caption>
      <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            #
          </th>
          <th scope="col" class="px-6 py-3">
            Nama Mahasiswa
          </th>
          <th scope="col" class="px-6 py-3">
            Kompetisi
          </th>
          <th scope="col" class="px-6 py-3">
            Skor
          </th>
          <th scope="col" class="px-6 py-3">
            Aksi
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <td class="px-6 py-4">
            1
          </td>
          <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
            Alfan Olivan
          </th>
          <td class="px-6 py-4">
            Gemastik Juara 1
          </td>
          <td class="px-6 py-4">
            50
          </td>
          <td class="px-6 py-4">
            <button type="button"
              class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm p-2">
              <i class="bx bx-edit-alt"></i>
            </button>
            <button type="button"
              class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2">
              <i class="bx bxs-trash-alt"></i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
    <nav class="flex items-center justify-between p-4 border-t" aria-label="Table navigation">
      <span class="text-sm font-normal text-gray-500">Showing <span
          class="font-semibold text-gray-900">1-10</span> of <span
          class="font-semibold text-gray-900">1000</span></span>
      <ul class="inline-flex -space-x-px text-sm h-8">
        <li>
          <a href="#"
            class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">
            Previous
          </a>
        </li>
        <li>
          <a href="#"
            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
            1
          </a>
        </li>
        <li>
          <a href="#"
            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
            2
          </a>
        </li>
        <li>
          <a href="#"
            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">
            Next
          </a>
        </li>
      </ul>
    </nav>
  </div>
@endsection
