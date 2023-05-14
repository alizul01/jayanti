<div id="default-carousel" class="relative w-full" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative rounded-lg overflow-hidden h-[28rem]">
    <!-- Item 1 -->
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="{{ asset('img/carousel-1.jpg') }}"
        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
    </div>
    <!-- Item 2 -->
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="{{ asset('img/carousel-2.jpg') }}"
        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
    </div>
    <!-- Item 3 -->
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="{{ asset('img/carousel-3.jpg') }}"
        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
    </div>
  </div>
  <!-- Slider controls -->
  <button type="button"
    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
    data-carousel-prev>
    <span
      class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/40 group-hover:bg-white/50 group-focus:outline-none">
      <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
      </svg>
      <span class="sr-only">Previous</span>
    </span>
  </button>
  <button type="button"
    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
    data-carousel-next>
    <span
      class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/40 group-hover:bg-white/50 group-focus:outline-none">
      <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
      </svg>
      <span class="sr-only">Next</span>
    </span>
  </button>
</div>
