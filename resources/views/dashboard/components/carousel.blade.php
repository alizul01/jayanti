<div id="default-carousel" class="relative w-full" data-carousel="slide">
  <div class="relative rounded-lg overflow-hidden h-[28rem]">
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="{{ asset('img/carousel-1.jpg') }}"
        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="{{ asset('img/carousel-2.jpg') }}"
        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="{{ asset('img/carousel-3.jpg') }}"
        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
    </div>
  </div>

  <button type="button"
    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
    data-carousel-prev>
    <span
      class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black/40 group-hover:bg-white/50 group-focus:outline-none">
      <i class="bx bx-chevron-left text-white sm:text-2xl"></i>
      <span class="sr-only">Previous</span>
    </span>
  </button>
  <button type="button"
    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
    data-carousel-next>
    <span
      class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black/40 group-hover:bg-white/50 group-focus:outline-none">
      <i class="bx bx-chevron-right text-white sm:text-2xl"></i>
      <span class="sr-only">Next</span>
    </span>
  </button>
</div>
