@extends('layout.master')

@section('layout')
  <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
    <header class="fixed flex flex-col top-0 left-0 w-64 bg-white h-full border-r">
      <div class="flex flex-col items-center justify-center gap-1 h-14">
        <span class="text-xl font-bold">
          ADMIN JAYANTI
        </span>
      </div>
      <hr>
      <nav class="overflow-y-auto overflow-x-hidden flex-grow">
        <ul class="flex flex-col py-4 space-y-1">
          <li class="px-5">
            <div class="flex flex-row items-center h-8">
              <div class="text-sm font-light tracking-wide text-gray-500">Menu</div>
            </div>
          </li>
          <li>
            <a href="{{ route('admin.index') }}"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="bx bx-home text-lg"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Beranda</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.ranks') }}"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="bx bx-bar-chart-alt-2 text-lg"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Ranking</span>
            </a>
          </li>
          <li>
            <x-navlinks route="{{ route('competitions.index') }}" name="Agenda">
              <i class="bx bx-calendar-event text-lg"></i>
            </x-navlinks>
          </li>
          <li>
            <x-navlinks route="{{ route('achievement.admin.index') }}" name="Data Prestasi">
              <i class="bx bxs-medal text-lg"></i>
            </x-navlinks>
          </li>
          <li>
            <x-navlinks route="{{ route('admin.import') }}" name="Import Data">
              <i class="bx bx-import text-lg"></i>
            </x-navlinks>
          </li>
          <li class="px-5">
            <div class="flex flex-row items-center h-8">
              <div class="text-sm font-light tracking-wide text-gray-500">Settings</div>
            </div>
          </li>
          <li>
            <x-navlinks route="{{ route('logout') }}" name="Logout">
              <i class="bx bx-log-out text-lg"></i>
            </x-navlinks>
          </li>
        </ul>
      </nav>
    </header>
    <main class="ml-64 p-8">
      @yield('content')
    </main>
  </div>
@endsection
