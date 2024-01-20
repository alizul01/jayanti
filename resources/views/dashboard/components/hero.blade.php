<section id="hero" class="bg-purple-700 px-4 py-7 md:p-8 rounded-lg items-start flex flex-col gap-8 text-white container relative overflow-hidden">
  <div>
    <p class="font-light text-sm">
      Jayanti - JTI Kaya Akan Prestasi
    </p>
    <h2 class="text-base md:text-2xl font-bold mt-1">
      Welcome, {{ Str::title(Auth::user()->name) }}! 🙌
    </h2>
  </div>
  <button>
    <a href="{{ route('achievements.index') }}" class="bg-black hover:bg-gray-800 text-white text-sm p-4 rounded-full">
      My Achievement
      <span class="rounded-full bg-white text-black inline-flex justify-center items-center px-1 py-1 ml-2">
        <i class="bx bx-right-arrow-alt"></i>
      </span>
    </a>
  </button>
  <img src="{{ asset('img/design/star.png') }}" alt="hero" class="absolute bottom-0 right-0 opacity-10">
</section>
