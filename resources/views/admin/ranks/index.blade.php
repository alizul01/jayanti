@extends('layout.admin')

@section('content')
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white ">
    <div class="w-full max-h-screen h-screen flex flex-col gap-4 p-5 text-sm text-left">
      <div class="flex justify-between">
        <p class="text-2xl font-semibold text-left text-gray-900 bg-white">
          Ranking Mahasiswa
        </p>
      </div>
      <div class="flex flex-col gap-5">
        <div class="border border-gray-300 rounded-lg shadow-sm p-5">
          <div class="flex items-center gap-7">
            <span class="text-5xl font-medium ml-2">1</span>
            <div class="border border-black rounded-full p-5 h-fit"></div>
            <div class="flex flex-col gap-1">
              <span class="font-semibold">Alfan Olivan</span>
              <span class="text-gray-500">2141720078</span>
              <span class="font-semibold">D4 Teknik Informatika</span>
            </div>
            <span class="ml-auto text-5xl font-semibold">98</span>
          </div>
        </div>
        <div class="border border-gray-300 rounded-lg shadow-sm p-5">
          <div class="flex items-center gap-7">
            <span class="text-5xl font-medium ml-2">2</span>
            <div class="border border-black rounded-full p-5 h-fit"></div>
            <div class="flex flex-col gap-1">
              <span class="font-semibold">Alfan Olivan</span>
              <span class="text-gray-500">2141720078</span>
              <span class="font-semibold">D4 Teknik Informatika</span>
            </div>
            <span class="ml-auto text-5xl font-semibold">98</span>
          </div>
        </div>
      </div>
    </div>
    <nav class="flex items-center justify-between p-4 border-t" aria-label="Table navigation">
      <span class="text-sm font-normal text-gray-500">Showing <span
          class="font-semibold text-gray-900">1-10</span> of <span
          class="font-semibold text-gray-900">1000</span></span>
      <ul class="inline-flex -space-x-px text-sm h-8">
        <li>
          <a href="#"
            class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">
            Previous
          </a>
        </li>
        <li>
          <a href="#"
            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
            1
          </a>
        </li>
        <li>
          <a href="#"
            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
            2
          </a>
        </li>
        <li>
          <a href="#"
            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">
            Next
          </a>
        </li>
      </ul>
    </nav>
  @endsection
