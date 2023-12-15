<nav class="bg-white text-black md:px-16 py-1 shadow-lg">
  <div class="flex flex-wrap items-center gap-8 mx-auto py-2 px-4">
    <a href="/" class="items-center border p-2 bg-white rounded-full md:flex hidden">
      <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-7 h-7 object-contain rounded-full">
    </a>

    <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <i class="bx bx-menu text-3xl"></i>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul
        class="font-normal text-sm flex flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
        <li>
          <a href="{{ route('dashboard') }}"
             class="block py-2 pl-3 pr-4 {{ Request::route()->getName() === 'dashboard' ? 'text-purple-500' : 'text-gray-500' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-500 md:p-0">Beranda</a>
        </li>
        <li>
          <a href="{{ route('ranks.index') }}"
             class="block py-2 pl-3 pr-4 {{ Request::route()->getName() === 'ranks.index' ? 'text-purple-500' : 'text-gray-500' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-500 md:p-0">Ranking</a>
        </li>
        <li>
          <a href="{{ route('competitions.index') }}"
             class="block py-2 pl-3 pr-4 {{ Request::route()->getName() === 'competitions.index' ? 'text-purple-500' : 'text-gray-500' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-500 md:p-0">Agenda</a>
        </li>
        <li>
          <a href="{{ route('achievements.index') }}"
             class="block py-2 pl-3 pr-4 {{ Request::route()->getName() === 'achievements.index' ? 'text-purple-500' : 'text-gray-500' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-500 md:p-0">Prestasiku</a>
        </li>
      </ul>
    </div>
    <div class="ml-auto">
      <a href="{{ route('logout') }}"
         class="inline-block px-6 py-2 text-sm rounded-lg font-medium leading-6 text-center text-red-50 bg-red-600 transition shadow hover:shadow-lg hover:bg-red-800">
        Logout
      </a>
    </div>
  </div>
</nav>
