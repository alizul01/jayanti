@extends('layout.user')

@section('content')
  <main class="flex flex-col gap-10 md:px-20 px-5 md:py-6 py-3 bg-gray-100">
    <section class="grid grid-cols-1 md:flex md:gap-10">
      @include('dashboard.components.carousel')
      @include('dashboard.components.agenda-card')
    </section>
    <section class="grid grid-cols-1 gap-6 md:flex md:gap-10">
      @include('dashboard.components.rangking')
      @include('dashboard.components.terbaru')
    </section>
  </main>
@endsection
