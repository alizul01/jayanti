@extends('layout.admin')

@section('content')
  <div class="relative max-h-screen overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
      <div class="flex justify-between items-center bg-white p-5">
        <p class="text-2xl font-semibold text-left text-gray-900">
          Agenda Kompetisi
        </p>
        <a href="/admin/competitions/create" class="no-underline">
          <button type="button"
                  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
            Tambah Kompetisi
          </button>
        </a>
      </div>
      <thead class="text-sm text-gray-700 uppercase bg-gray-50">
      <tr>
        <th scope="col" class="px-6 py-3">
          #
        </th>
        <th scope="col" class="px-6 py-3">
          Nama Kompetisi
        </th>
        <th scope="col" class="px-6 py-3">
          Deskripsi
        </th>
        <th scope="col" class="px-6 py-3">
          Tanggal
        </th>
        <th scope="col" class="px-6 py-3">
          Aksi
        </th>
      </tr>
      </thead>
      <tbody>
      @foreach($competition as $item)
        <tr class="bg-white border-b">
          <td class="px-6 py-4">
            {{$loop->iteration}}
          </td>
          <th scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
            {{$item->name}}
          </th>
          <td class="px-6 py-4 max-w-xs">
            <p class="line-clamp-2">
              {{$item->description}}
            </p>
          </td>
          <td class="px-6 py-4">
            {{\Carbon\Carbon::parse($item->date)->format('d F Y')}} s.d.
            <br>
            {{\Carbon\Carbon::parse($item->date_end)->format('d F Y')}}
          </td>
          <td class="px-6 py-4 flex gap-2">
            <a href="/admin/competitions/{{$item->id}}/edit"
               class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2">
              <i class="bx bxs-pencil"></i>
            </a>
            <form action="/admin/competitions/{{$item->id}}" method="POST" class="inline">
              @csrf
              @method('DELETE')
              <button type="submit"
                      class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2">
                <i class="bx bxs-trash-alt"></i>
              </button>
            </form>
          </td>
        </tr>
      @endforeach
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
