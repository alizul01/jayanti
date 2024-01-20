<nav class="bg-white text-black md:px-16 py-1 shadow-md border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-8 h-8 object-contain rounded-full">
      </a>
      <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse flex-wrap">
        <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <img class="w-8 h-8 rounded-full"
               src="https://source.boringavatars.com/beam/120/{{ auth()->user()->name }}"
               alt="user photo">
        </button>
        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
          <div class="px-4 py-3">
            <span class="block text-sm text-gray-900 dark:text-white">
              {{ auth()->user()->name }}
            </span>
            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">
              {{ auth()->user()->email }}
            </span>
          </div>
          <ul class="py-2" aria-labelledby="user-menu-button">
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                My Profile
              </a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
            </li>
            <li>
              <a href="{{route('logout')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
            </li>

          </ul>
        </div>
        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <i class="bx bx-menu text-3xl"></i>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
        <ul class="flex flex-col font-normal text-sm p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="{{ route('dashboard') }}"
               class="block py-2 pl-3 pr-4 {{ Request::route()->getName() === 'dashboard' ? 'text-purple-500' : 'text-gray-500' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-500 md:p-0">Home</a>
          </li>
          <li>
            <a href="{{ route('ranks.index') }}"
               class="block py-2 pl-3 pr-4 {{ Request::route()->getName() === 'ranks.index' ? 'text-purple-500' : 'text-gray-500' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-500 md:p-0">Ranks</a>
          </li>
          <li>
            <a href="{{ route('competitions.index') }}"
               class="block py-2 pl-3 pr-4 {{ Request::route()->getName() === 'competitions.index' ? 'text-purple-500' : 'text-gray-500' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-500 md:p-0">Agenda</a>
          </li>
          <li>
            <a href="{{ route('achievements.index') }}"
               class="block py-2 pl-3 pr-4 {{ Request::route()->getName() === 'achievements.index' ? 'text-purple-500' : 'text-gray-500' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-500 md:p-0">Achievement</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
