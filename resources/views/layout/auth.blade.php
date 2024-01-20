@extends('layout.master')

@section('layout')
  <div class="flex" id="app">
    <div class="min-h-screen bg-[#f9f9f9] flex flex-col w-screen h-screen justify-center items-center mx-3">
      @yield('content')
    </div>
  </div>
@endsection
