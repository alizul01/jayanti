@extends('layout.master')

@section('layout')
  <header>
    @include('layout.components.navbar')
  </header>
  <main class="flex flex-col gap-10 px-14 py-6 bg-gray-100">
    @yield('content')
  </main>
@endsection
