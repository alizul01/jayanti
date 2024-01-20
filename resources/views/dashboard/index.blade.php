@extends('layout.user')

@section('content')
  <section>
    <img src="{{ asset('img/design/hero.png') }}" alt="circle_design" class="absolute top-0 md:left-10">
    <img src="{{ asset('img/design/hero.png') }}" alt="circle_design" class="absolute rotate-90 top-96 md:right-10">
    <div class="flex flex-col gap-10 container mx-auto max-w-7xl py-8 relative z-0">
      <div class="grid grid-cols-1 gap-6 mx-4">
        @include('dashboard.components.hero')
        @include('dashboard.components.carousel')
        @include('dashboard.components.value')
        @include('dashboard.components.agenda-card')
      </div>
      <div class="grid grid-cols-1 gap-6 md:flex md:gap-10 mx-4 md:mx-0 border-t border-gray-300 py-8">
        @include('dashboard.components.rank')
        @include('dashboard.components.newest')
      </div>
    </div>
  </section>
@endsection
