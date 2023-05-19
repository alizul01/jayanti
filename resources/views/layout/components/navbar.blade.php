<nav class="bg-gray-700 text-white border-gray-200 px-16 py-1">
  <div class="flex flex-wrap items-center gap-8 mx-auto p-4">
    <a href="/" class="flex items-center">
      <h1>Logo Jayanti</h1>
    </a>
    <button data-collapse-toggle="navbar-default" type="button"
      class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
      aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <h1>Logo Jayanti</h1>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul
        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-700 md:flex-row md:space-x-8 md:mt-0 md:border-0">
        <li>
          <a href="#"
            class="block py-2 pl-3 pr-4 text-blue-500 bg-blue-700 rounded md:bg-transparent md:p-0">Beranda</a>
        </li>
        <li>
          <a href="#"
            class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-500 md:p-0">Rangking</a>
        </li>
        <li>
          <a href="#"
            class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-500 md:p-0">Agenda</a>
        </li>
        <li>
          <a href="#"
            class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-500 md:p-0">Prestasi</a>
        </li>

      </ul>
    </div>
    <div class="ml-auto">
      <a href="{{ route('login') }}"
        class="inline-block px-6 py-2 text-md rounded-lg font-medium leading-6 text-center text-white transition bg-blue-700 shadow hover:shadow-lg hover:bg-blue-800">
        Login
      </a>
    </div>
  </div>
</nav>
