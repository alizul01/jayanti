@extends('layout.user')
@section('content')
  <main class="flex flex-col gap-10 px-20 py-6 bg-gray-100 min-h-screen">
    <section id="ranking" class="bg-white p-6 rounded-lg flex flex-col gap-2 outline outline-1 outline-gray-200">
      <h2 class="text-2xl font-bold text-gray-800 mx-auto tracking-wide">
        Daftar Ranking Mahasiswa
      </h2>
    </section>
    <div class="w-full p-6 flex flex-col gap-5 bg-white outline outline-1 outline-gray-200 rounded-lg">
      @foreach($ranks as $item)
        <div class="border border-gray-300 rounded-lg shadow-sm p-5">
          <div class="flex items-center gap-7">
            <span class="text-5xl font-medium ml-2">{{$loop->iteration}}</span>
            <div>
              <img
                src="https://source.boringavatars.com/beam/120/{{ $item->user->name }}"
                alt="Avatar"
                class="border-black border-2 rounded-full w-10 h-10"
              >
            </div>
            <div class="flex flex-col gap-1">
              <span class="font-semibold">{{$item->user->name}}</span>
              <span class="text-gray-500">{{$item->user->studyprograms->name}}</span>
            </div>
            <span class="ml-auto text-5xl font-semibold">{{$item->total_score}}</span>
          </div>
        </div>
      @endforeach
      {{$ranks->links()}}
    </div>
  </main>
@endsection
