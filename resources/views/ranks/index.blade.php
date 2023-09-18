@extends('layout.user')
@section('content')
  <main class="flex flex-col gap-10 px-20 py-6 bg-gray-100 min-h-screen">
    <div class="flex flex-col gap-5">
      <h1 class="font-semibold text-3xl mx-auto tracking-wide">Daftar Ranking Mahasiswa</h1>
      <hr class="border-t-2 border-gray-300">
    </div>
    <div class="w-full p-6 flex flex-col gap-5 bg-white border border-gray-300 rounded-lg shadow-sm">
      <h1 class="font-semibold text-2xl text-center">Rangking</h1>
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
      {{$ranks->links()}}
    </div>
  </main>
@endsection
