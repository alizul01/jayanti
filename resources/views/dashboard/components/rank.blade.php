<div class="w-full p-6 flex flex-col gap-5 bg-white border border-gray-300 rounded-lg shadow-sm">
  <h1 class="text-2xl font-bold text-gray-800">
    Ranking
  </h1>
  @foreach($ranks as $item)
    <div class="border border-gray-300 rounded-lg shadow-sm p-5">
      <div class="flex items-center gap-7">
        <span class="text-5xl font-medium ml-2">{{$loop->iteration}}</span>
        <div>
          <img
            src="https://source.boringavatars.com/beam/120/{{ $item->user->name }}"
            alt="Avatar"
            class="border-black border-2 rounded-full w-10 h-10"
          >
        </div>
        <div class="flex flex-col gap-1">
          <span class="font-semibold">{{$item->user->name}}</span>
          <span class="text-gray-500">{{$item->user->studyprograms->name}}</span>
        </div>
        <span class="ml-auto text-5xl font-semibold">{{$item->total_score}}</span>
      </div>
    </div>
  @endforeach
  <a href="{{ route('ranks.index') }}"
     class="flex justify-end ml-auto mt-auto max-w-fit px-3 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-purple-800">
    Selengkapnya
  </a>
</div>
