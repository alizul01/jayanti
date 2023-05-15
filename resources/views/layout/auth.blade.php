@extends('layout.master')

@section('layout')
  <main class="grid h-screen place-items-center bg-slate-700 px-5 md:px-0">
    @yield('content')
  </main>
@endsection
