@extends('layout.master')

@section('layout')
  <div class="flex" id="app">
    <div class="min-h-screen bg-[#f9fafb] flex flex-col w-screen h-screen justify-center items-center">
      @yield('content')
    </div>
  </div>
@endsection
