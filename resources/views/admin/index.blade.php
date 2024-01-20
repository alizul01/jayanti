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
      <div class="w-full max-h-screen h-fit flex flex-col gap-4 p-5 text-sm text-left">
        <div class="flex justify-between">
          <p class="text-2xl font-semibold text-left text-gray-900 bg-white">
            Ranking Mahasiswa
          </p>
          <a href="{{route('achievement.admin.index')}}" class="no-underline">
            <button type="button"
                    class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5">
              Lihat Semua
            </button>
          </a>
        </div>
        <div class="flex flex-col gap-5">
          @foreach($ranks as $item)
            <div class="relative border border-gray-300 rounded-xl md:rounded-2xl shadow-sm p-4 flex items-center gap-5">
              @if($loop->first)
                <div class="flex items-center justify-center rounded-full bg-purple-100">
                  <i
                    class="bx bx-trophy text-xl text-green-700 w-8 h-8 bg-green-100 rounded-full text-center items-center flex justify-center"></i>
                </div>
              @else
                <span class="text-2xl font-medium">{{$loop->iteration}}</span>
              @endif
              <div>
                <img
                  src="https://source.boringavatars.com/beam/120/{{ $item->user->name }}"
                  alt="Avatar"
                  class="rounded-full w-10 h-10"
                >
              </div>
              <div class="flex flex-col gap-px">
        <span class="font-bold md:text-lg text-sm">
          {{ Str::title($item->user->name) }}
        </span>
                <span class="text-gray-700 text-sm">{{ $item->user->studyprograms->name }}</span>
              </div>
              <span class="ml-auto text-xl font-normal">{{ $item->total_score }} XP</span>
            </div>
          @endforeach
        </div>
      </div>
      {{ $ranks->links() }}
    </div>

  </section>
@endsection
