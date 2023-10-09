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
      @foreach($achievements as $achievement)
        <tr class="bg-white dark:bg-gray-700">
          <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-gray-400">
            {{ $loop->iteration }}
          </td>
          <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-gray-400">
            {{ $achievement->name }}
          </td>
          <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-gray-400">
            {{ $achievement->name }}
          </td>
          <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-gray-400">
            {{ $achievement->score }}
          </td>
          <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-gray-400">
            <a href="#"
               class="text-indigo-600 hover:text-indigo-900">Edit</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    {{ $achievements->links() }}
  </div>
@endsection
