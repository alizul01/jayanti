@extends('layout.user')

@section('content')
  <section class="flex flex-col gap-10 container mx-auto max-w-7xl my-8">
    <section class="grid grid-cols-1 gap-6 mx-4 md:mx-0">
      @include('dashboard.components.hero')
      @include('dashboard.components.carousel')
      @include('dashboard.components.agenda-card')
    </section>
    <section class="grid grid-cols-1 gap-6 md:flex md:gap-10 mx-4 md:mx-0">
      @include('dashboard.components.rank')
      @include('dashboard.components.newest')
    </section>
  </section>
@endsection
