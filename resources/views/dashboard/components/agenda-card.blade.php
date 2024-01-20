<section id="agenda" class="rounded-lg p-4">
  <div class="mb-8">
    <div class="flex justify-start gap-3 items-center relative">
      <div class="relative">
        <div class="w-4 h-4 rounded-full bg-purple-600 animate-ping"></div>
        <div class="w-4 h-4 rounded-full bg-purple-600 absolute top-0"></div>
      </div>
      <h2 class="text-xl font-semibold text-gray-800 inline">
        Mau memulai hal baru apa hari ini?
      </h2>
    </div>
  </div>
  <div>
    <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
      @foreach($competitions as $item)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
            <img class="rounded-t-lg" src="https://www.placehold.it/700x400" alt="Placeholder"/>
          </a>
          <div class="p-5 flex flex-col gap-2">
            <span
              class="bg-purple-100 w-fit text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-purple-900 dark:text-purple-300">
              {{$item->organizer}}
            </span>
            <span>
              <a href="#">
              <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $item->name }}
              </h5>
            </a>
            <p class="mb-3 font-normal text-sm text-gray-500 line-clamp-3">
              {{ $item->description }}
            </p>
            </span>
            <span class="text-sm text-gray-600">
              {{ \Carbon\Carbon::parse($item->start_date)->format('d F Y') }} - {{ \Carbon\Carbon::parse($item->end_date)->format('d F Y') }}
            </span>

            <button type="button"
                    class="flex items-center justify-center text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 w-fit">
              Detail Kompetisi <i class="bx bx-right-arrow-alt ml-2"></i>
            </button>
          </div>
        </div>
      @endforeach
    </section>
  </div>
</section>
