@extends('layout.admin')

@section('content')
  <section>
    <h1 class="text-2xl font-semibold">
      <span class="inline-flex justify-center items-center gap-1 ml-4">
        <i class="bx bx-home"></i>
        Beranda
      </span>
    </h1>
    <div class="flex gap-5 my-5">
      <div
        class="flex flex-1 flex-col justify-center items-center gap-4 p-6 bg-white border border-gray-200 rounded-lg shadow">
        <div class="rounded-xl p-3 bg-purple-700 text-white text-center w-1/5">
          <i class="bx bx-calendar-event text-3xl"></i>
        </div>
        <h5 class="text-2xl font-bold tracking-tight text-gray-900">
          {{$competitions->count()}}
        </h5>
        <p>Jumlah Agenda</p>
      </div>
      <div
        class="flex flex-1 flex-col justify-center items-center gap-4 p-6 bg-white border border-gray-200 rounded-lg shadow">
        <div class="rounded-xl p-3 bg-purple-700 text-white text-center w-1/5">
          <i class="bx bxs-medal text-3xl"></i>
        </div>
        <h5 class="text-2xl font-bold tracking-tight text-gray-900">
          {{$achievements->count()}}
        </h5>
        <p>Jumlah Prestasi</p>
      </div>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white ">
      <div class="w-full max-h-screen h-screen flex flex-col gap-4 p-5 text-sm text-left">
        <div class="flex justify-between">
          <p class="text-2xl font-semibold text-left text-gray-900 bg-white">
            Ranking Mahasiswa
          </p>
          <a href="/admin/ranks" class="no-underline">
            <button type="button"
                    class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5">
              Lihat Semua
            </button>
          </a>
        </div>
        <div class="flex flex-col gap-5">
          @foreach($ranks as $item)
            <div class="border border-gray-300 rounded-lg shadow-sm p-5">
              <div class="flex items-center gap-7">
                <span class="text-5xl font-medium ml-2">{{$loop->iteration}}</span>
                <div class="border border-black rounded-full p-5 h-fit"></div>
                <div class="flex flex-col gap-1">
                  <span class="font-semibold">{{$item->user->name}}</span>
                  <span class="text-gray-500">{{$item->user->studyprograms->name}}</span>
                </div>
                <span class="ml-auto text-5xl font-semibold">{{$item->total_score}}</span>
              </div>
            </div>
          @endforeach
        </div>
      </div>
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

  </section>
@endsection
