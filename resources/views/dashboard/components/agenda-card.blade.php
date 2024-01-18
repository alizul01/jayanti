<section id="agenda" class="rounded-lg">
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
        <div class="max-w-full p-6 bg-white border border-gray-200 rounded-lg outline outline-1 outline-gray-200">
          <div class="flex justify-between items-center mb-3">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">
              {{ $item->name }}
            </h5>
            <span class="text-sm text-gray-600">
              {{ \Carbon\Carbon::parse($item->start_date)->format('d F Y') }} - {{ \Carbon\Carbon::parse($item->end_date)->format('d F Y') }}
            </span>
          </div>
          <p class="mb-3 font-normal text-gray-500 line-clamp-3">
            {{ $item->description }}
          </p>
          <button type="button"
                  class="flex items-center justify-center text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5">
            Detail Kompetisi <i class="bx bx-right-arrow-alt ml-2"></i>
          </button>
        </div>
      @endforeach
    </section>
  </div>
</section>
