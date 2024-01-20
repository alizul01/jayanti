<section id="carousel">
  <div id="default-carousel" class="relative w-full" data-carousel="slide">
    <div class="relative rounded-lg overflow-hidden h-56 md:h-[28rem]">
      <div class="hidden duration-1000 ease-in-out" data-carousel-item>
        <img src="{{ asset('img/carousel-1.jpg') }}"
             class="absolute block w-full h-full object-cover top-0 left-0" alt="...">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black/70 to-transparent text-white p-8 flex flex-col justify-between">
          <div class="mt-auto">
            <h2 class="text-xl md:text-2xl font-bold mb-px">
              KMIPN V 2023
            </h2>
            <p class="text-sm">
              @Politeknik Elektronika Negeri Surabaya
            </p>
          </div>
        </div>
      </div>
      <div class="hidden duration-1000 ease-in-out" data-carousel-item>
        <img src="{{ asset('img/carousel-2.jpg') }}"
             class="absolute block w-full h-full object-cover top-0 left-0" alt="...">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black/70 to-transparent text-white p-8 flex flex-col justify-between">
          <div class="mt-auto">
            <h2 class="text-xl md:text-2xl font-bold mb-px">
              4C National Competition 2023
            </h2>
            <p class="text-sm">
              @Universitas Brawijaya
            </p>
          </div>
        </div>
      </div>
      <div class="hidden duration-1000 ease-in-out" data-carousel-item>
        <img src="{{ asset('img/carousel-3.jpg') }}"
             class="absolute block w-full h-full object-cover top-0 left-0" alt="...">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black/70 to-transparent text-white p-8 flex flex-col justify-between">
          <div class="mt-auto">
            <h2 class="text-xl md:text-2xl font-bold mb-px">
              GemasTIK XVI 2023
            </h2>
            <p class="text-sm">
              Pusat Prestasi Nasional (Puspresnas)
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
      <button type="button" class="w-2 h-2 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-2 h-2 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="w-2 h-2 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
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
</section>
