@extends('layout.admin')

@section('content')
  <div class="relative max-h-screen overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
      <div class="flex justify-between items-center bg-white p-5">
        <p class="text-2xl font-semibold text-left text-gray-900">
          Nama Mahasiswa
        </p>
        <a href="/admin/competitions/create" class="no-underline">
          <button type="button"
                  class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5">
            Tambah Mahasiswa
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
          NIM
        </th>
        <th scope="col" class="px-6 py-3">
          Email
        </th>
        <th scope="col" class="px-6 py-3">
          Aksi
        </th>
      </tr>
      </thead>
      <tbody>
      @foreach($users as $item)
        <tr class="bg-white border-b">
          <td class="px-6 py-4">
            {{$loop->iteration}}
          </td>
          <th scope="row" class="px-4 py-4 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
            {{$item->name}}
          </th>
          <td class="px-6 py-4 max-w-xs">
            <p class="line-clamp-2">
              {{$item->nim}}
            </p>
          </td>
          <td class="px-6 py-4">
            {{$item->email}}
          </td>
          <td class="px-6 py-4 flex gap-2">
            <a href="{{route('users.edit', $item->id)}}"
               class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm p-2">
              <i class="bx bxs-pencil"></i>
            </a>
            <form action="{{route('users.destroy', $item->id)}}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?');">
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
    {{$users->links()}}
  </div>
@endsection
