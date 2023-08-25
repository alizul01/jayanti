@extends('layout.user')

@section('content')
  <main class="flex flex-col gap-10 px-20 py-6 bg-gray-100 min-h-screen">
    <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow">
        <div class="flex justify-between items-center mb-3">
          <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">
            Kompetisi Intercomp JTI
          </h5>
          <span class="text-sm text-gray-600">10 November 2023</span>
        </div>
        <p class="mb-3 font-normal text-gray-500 line-clamp-3">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, porro ipsum. Deserunt
          voluptatibus, eum sed dolorem similique amet dolorum odit repudiandae eaque fugit neque est id nisi
          assumenda molestiae maxime debitis voluptatum at modi nostrum iure temporibus velit consectetur
          necessitatibus. Modi sint non dicta reiciendis optio quae rerum aperiam distinctio.
        </p>
        <button type="button"
          class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
          Link Kompetisi
          <svg class="w-3 h-3 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
          </svg>
        </button>
      </div>
      <div class="max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow">
        <div class="flex justify-between items-center mb-3">
          <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">
            Kompetisi Intercomp JTI
          </h5>
          <span class="text-sm text-gray-600">10 November 2023</span>
        </div>
        <p class="mb-3 font-normal text-gray-500 line-clamp-3">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, porro ipsum. Deserunt
          voluptatibus, eum sed dolorem similique amet dolorum odit repudiandae eaque fugit neque est id nisi
          assumenda molestiae maxime debitis voluptatum at modi nostrum iure temporibus velit consectetur
          necessitatibus. Modi sint non dicta reiciendis optio quae rerum aperiam distinctio.
        </p>
        <button type="button"
          class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
          Link Kompetisi
          <svg class="w-3 h-3 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
          </svg>
        </button>
      </div>
    </section>
  </main>
@endsection