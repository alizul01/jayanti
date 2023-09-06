@extends('layout.master')

@section('layout')
  <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
    <header class="fixed flex flex-col top-0 left-0 w-64 bg-white h-full border-r">
      <div class="flex flex-col items-center justify-center gap-1 h-14">
        <span class="text-lg font-semibold">Admin JAYANTI</span>
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
            <a href="/admin/home"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="bx bx-home text-lg"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Beranda</span>
            </a>
          </li>
          <li>
            <a href="/admin/ranks"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="bx bx-bar-chart-alt-2 text-lg"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Ranking</span>
              {{-- <span
                class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-indigo-500 bg-indigo-50 rounded-full">
                New
              </span> --}}
            </a>
          </li>
          <li>
            <a href="/admin/competitions"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="bx bx-calendar-event text-lg"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Agenda</span>
            </a>
          </li>
          <li>
            <a href="/admin/achievements"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <i class="bx bxs-medal text-lg"></i>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Prestasi</span>
            </a>
          </li>
          <li class="px-5">
            <div class="flex flex-row items-center h-8">
              <div class="text-sm font-light tracking-wide text-gray-500">Settings</div>
            </div>
          </li>
          <li>
            <a href="#"
              class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
              <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                  </path>
                </svg>
              </span>
              <span class="ml-2 text-sm tracking-wide truncate">Logout</span>
            </a>
          </li>
        </ul>
      </nav>
    </header>
    <main class="ml-64 p-8">
      @yield('content')
    </main>
  </div>
@endsection
