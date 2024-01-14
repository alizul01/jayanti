@extends('layout.master')

@section('layout')
  <header>
    @include('layout.components.navbar')
  </header>
  @yield('content')
@endsection
