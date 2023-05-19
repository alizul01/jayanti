@extends('layout.user')

@section('content')
  <main class="flex flex-col gap-10 px-20 py-6 bg-gray-100">
    <section class="flex gap-10">
      @include('dashboard.components.carousel')
      @include('dashboard.components.agenda-card')
    </section>
    <section class="flex gap-10">
      @include('dashboard.components.rangking')
      @include('dashboard.components.terbaru')
    </section>
  </main>
@endsection
