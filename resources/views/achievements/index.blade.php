@extends('layout.user')

@section('content')
  <div class="flex flex-col gap-10 container mx-auto max-w-7xl py-8 relative z-0 min-h-screen">
    <div class="mx-4">
      <section id="achievement-hero"
               class="bg-blue-700 px-4 py-7 md:p-8 rounded-lg items-center flex flex-col gap-8 text-white container relative overflow-hidden">
        <div>
          <p class="font-light text-center text-sm md:text-base">
            Hello, {{ Str::title(Auth::user()->name) }}!
          </p>
          <h2 class="text-2xl md:text-3xl font-bold text-center">
            This is your achievement!
          </h2>
        </div>
        <img src="{{ asset('img/design/star.png') }}" alt="hero" class="absolute bottom-0 right-0 opacity-10">
      </section>
      <div class="mt-8 flex justify-between">
        <h2 class="text-start text-2xl sm:text-start sm:text-3xl font-bold text-gray-800">
          All Achievement
        </h2>
        <a href="{{ route('achievements.create') }}" class="">
          <button type="button"
                  class="text-white bg-purple-700 hover:bg-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
            Tambah Prestasi
          </button>
        </a>
      </div>
      <div class="flex flex-col gap-5 mt-2">
        <div class="relative overflow-x-auto rounded-lg">
          <table class="w-full text-sm text-center text-gray-500">
            <thead class="text-sm text-gray-700 uppercase bg-gray-100">
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
    </div>
  </div>
@endsection
