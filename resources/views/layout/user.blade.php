@extends('layout.master')

@section('layout')
  <header>
    @include('layout.components.navbar')
  </header>
  <main class="bg-[#fbfefd] relative">
    @yield('content')
  </main>
  <footer>
    @include('layout.components.footer')
  </footer>
@endsection
