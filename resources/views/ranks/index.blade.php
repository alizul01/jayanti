@extends('layout.user')
@section('content')
  <div class="flex flex-col gap-10 container mx-auto max-w-7xl py-8 relative z-0 min-h-screen">
    <div class="mx-4">
      <section id="ranks-hero"
               class="bg-purple-700 px-4 py-7 md:p-8 rounded-lg items-center flex flex-col gap-8 text-white container relative overflow-hidden">
        <div>
          <p class="font-light text-center text-sm md:text-base">
            Hello, {{ Str::title(Auth::user()->name) }}!
          </p>
          <h2 class="text-2xl md:text-3xl font-bold text-center">
            Check your rank here
          </h2>
        </div>
        <img src="{{ asset('img/design/star.png') }}" alt="hero" class="absolute bottom-0 right-0 opacity-10">
      </section>
      <div class="mt-8">
        <h2 class="text-start text-2xl sm:text-start sm:text-3xl font-bold text-gray-800">
          Student Score
        </h2>
      </div>
      <div class="flex flex-col gap-5 mt-2">
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
        {{$ranks->links()}}
      </div>
    </div>
  </div>
@endsection
