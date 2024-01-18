@extends('layout.master')

@section('layout')
  <header>
    @include('layout.components.navbar')
  </header>
  <main class="bg-[#f9f9f9]">
    @yield('content')
  </main>
@endsection
