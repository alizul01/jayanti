@extends('layout.user')

@section('content')
  <div class="flex flex-col gap-10 container mx-auto max-w-7xl py-8 relative z-0 min-h-screen">
    <div class="mx-4">
      <section id="ranks-hero"
               class="bg-green-700 px-4 py-7 md:p-8 rounded-lg items-center flex flex-col gap-8 text-white container relative overflow-hidden">
        <div>
          <p class="font-light text-center text-sm md:text-base">
            Hello, {{ Str::title(Auth::user()->name) }}!
          </p>
          <h2 class="text-2xl md:text-3xl font-bold text-center">
            Let's join the competition!
          </h2>
        </div>
        <img src="{{ asset('img/design/star.png') }}" alt="hero" class="absolute bottom-0 right-0 opacity-10">
      </section>
      <div class="mt-8">
        <h2 class="text-start text-2xl sm:text-start sm:text-3xl font-bold text-gray-800">
          All Competition
        </h2>
      </div>
      <div class="flex flex-col gap-5 mt-2">
        @foreach($competitions as $item)
          <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
              <img class="rounded-t-lg" src="https://www.placehold.it/700x400" alt="Placeholder"/>
            </a>
            <div class="p-5 flex flex-col gap-2">
            <span
              class="bg-purple-100 w-fit text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-purple-900 dark:text-purple-300">
              {{$item->organizer}}
            </span>
              <span>
              <a href="#">
              <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $item->name }}
              </h5>
            </a>
            <p class="mb-3 font-normal text-sm text-gray-500 line-clamp-3">
              {{ $item->description }}
            </p>
            </span>
              <span class="text-sm text-gray-600">
              {{ \Carbon\Carbon::parse($item->start_date)->format('d F Y') }} - {{ \Carbon\Carbon::parse($item->end_date)->format('d F Y') }}
            </span>

              <button type="button"
                      class="flex items-center justify-center text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 w-fit">
                Detail Kompetisi <i class="bx bx-right-arrow-alt ml-2"></i>
              </button>
            </div>
          </div>
        @endforeach
        {{$competitions->links()}}
      </div>
    </div>
  </div>
@endsection
