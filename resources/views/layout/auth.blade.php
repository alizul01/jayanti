@extends('layout.master')

@section('layout')
  <div class="flex" id="app">
    <div class="min-h-screen bg-[#f9f9f9] flex flex-col w-screen h-screen justify-center items-center mx-3 relative">
      <img src="{{ asset('img/design/hero.png') }}" alt="circle_design" class="absolute top-20 left-10 -z-0">
      <img src="{{ asset('img/design/hero.png') }}" alt="circle_design" class="absolute rotate-90 top-96 right-10">
      <div class="z-10">
        @yield('content')
      </div>
    </div>
  </div>
@endsection
