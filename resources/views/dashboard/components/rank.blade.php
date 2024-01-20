<div class="w-full flex flex-col gap-5 relative">
  <div>
    <p class="text-center text-sm sm:text-start text-purple-700 sm:mb-2 font-semibold">
      #Competition
    </p>
    <h2 class="text-center text-2xl sm:text-start sm:text-3xl font-bold text-gray-800">
      Student Score
    </h2>
  </div>
  @foreach($ranks as $item)
    <div class="relative border border-gray-300 rounded-xl md:rounded-2xl shadow-sm p-4 flex items-center gap-5">
      @if($loop->first)
        <div class="flex items-center justify-center rounded-full bg-purple-100">
          <i
            class="bx bx-trophy text-xl text-green-700 w-8 h-8 bg-green-100 rounded-full text-center items-center flex justify-center"></i>
        </div>
      @else
        <span class="text-2xl font-medium">{{$loop->iteration}}</span>
      @endif
      <div>
        <img
          src="https://source.boringavatars.com/beam/120/{{ $item->user->name }}"
          alt="Avatar"
          class="rounded-full w-10 h-10"
        >
      </div>
      <div class="flex flex-col gap-px">
        <span class="font-bold md:text-lg text-sm">
          {{ Str::title($item->user->name) }}
        </span>
        <span class="text-gray-700 text-sm">{{ $item->user->studyprograms->name }}</span>
      </div>
      <span class="ml-auto text-2xl font-semibold">{{ $item->total_score }}</span>
    </div>
  @endforeach
  <a href="{{ route('ranks.index') }}"
     class="flex justify-center sm:justify-end ml-auto mt-4 max-w-fit px-3 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-purple-800">
    Selengkapnya
  </a>
</div>
