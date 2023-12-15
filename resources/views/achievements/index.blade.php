@extends('layout.user')

@section('content')
  <main class="flex flex-col gap-5 px-20 py-6 bg-gray-100 h-screen">
    <div id="competition" class="bg-white p-6 rounded-lg flex flex-col gap-2 outline outline-1 outline-gray-200">
      <h2 class="text-2xl font-bold text-gray-800 mx-auto tracking-wide">
        Prestasiku
      </h2>
    </div>
    <div class="bg-white px-20 py-6">
      <div class="flex justify-between items-center mb-12">
        <div>
          <h2 class="text-2xl font-bold text-gray-800">
            Riwayat Prestasi
          </h2>
          <p class="text-gray-400 font-light">
            Yuk, tambahkan prestasi yang pernah kamu raih!
          </p>
        </div>
        <a href="{{ route('achievements.create') }}" class="">
          <button type="button"
                  class="text-white bg-purple-700 hover:bg-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
            Tambah Prestasi
          </button>
        </a>
      </div>
      <div class="relative overflow-x-auto rounded-lg">
        <table class="w-full text-sm text-center text-gray-500">
          <thead class="text-sm text-gray-700 uppercase bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-3">
              #
            </th>
            <th scope="col" class="px-6 py-3">
              Nama Kompetisi
            </th>
            <th scope="col" class="px-6 py-3">
              Tingkat
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
          @foreach($achievements as $item)
            <tr class="bg-white border-b border-gray-300">
              <td class="px-6 py-4">
                {{$loop->iteration}}
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                {{$item->name}}
              </th>
              <td class="px-6 py-4">
                {{$item->rank->name}}
              </td>
              <td class="px-6 py-4">
                {{$item->score}}
              </td>
              <td class="px-6 py-4">
                <div class="flex gap-3 justify-center">
                  <a href="{{ route('achievements.show', $item->id) }}"
                     class="text-white bg-purple-700 hover:bg-purple-800 font-medium rounded-lg text-sm px-3 py-1 text-center">
                    <i class="bx bxs-show text-lg"></i>
                  </a>
                  <a href="{{ route('achievements.edit', $item->id) }}"
                     class="text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-3 py-1 text-center">
                    <i class="bx bxs-edit text-lg"></i>
                  </a>
                  <form action="{{ route('achievements.destroy', $item->id) }}" method="POST"
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus prestasi ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-3 py-1 text-center">
                      <i class="bx bx-trash text-lg"></i>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
        {{$achievements->links()}}
      </div>
    </div>
  </main>
@endsection
