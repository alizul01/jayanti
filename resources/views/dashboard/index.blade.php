@extends('layout.user')

@section('content')
  <section class="flex gap-10">
    @include('dashboard.components.carousel')
    @include('dashboard.components.agenda-card')
  </section>
  <section class="flex gap-10">
    @include('dashboard.components.rangking')
    @include('dashboard.components.terbaru')
  </section>
@endsection
