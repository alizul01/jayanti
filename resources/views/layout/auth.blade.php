@extends('layout.master')

@section('layout')
  <div class="grid h-screen place-items-center bg-slate-700 px-5 md:px-0">
    @yield('content')
  </div>
@endsection
