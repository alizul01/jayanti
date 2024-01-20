@php
  function getRankDescription($rankId) {
      switch ($rankId) {
          case 1:
              return 'Juara 1';
          case 2:
              return 'Juara 2';
          case 3:
              return 'Juara 3';
          case 4:
              return 'Harapan';
          case 5:
              return 'Best';
          default:
              return 'Pilih Peringkat';
      }
  }
@endphp

<div class="max-w-2xl basis-1/3 sm:mt-0 mt-8 bg-white border border-gray-300 rounded-lg shadow-sm overflow-hidden h-fit">
  <div class="p-4">
    <p class="text-start text-purple-700 font-semibold text-sm sm:mb-2 sm:text-lg">
      #Newest
    </p>
    <h2 class="text-start text-2xl sm:text-3xl font-bold text-gray-800">
      Achievement
    </h2>
  </div>
  <div>
    @foreach($achievements as $index => $achievement)
      <div class="flex flex-col gap-1 border-y border-y-1 border-gray-300 p-4
                        @if($index % 2 === 0)
                            bg-gray-50
                        @else
                            bg-white
                        @endif">
        <span class="font-bold">{{$achievement->user->name}}</span>
        <span>{{$achievement->user->nim}}</span>
        <span>{{ getRankDescription($achievement->rank_id) }} {{$achievement->name}}</span>
      </div>
    @endforeach
  </div>
</div>
