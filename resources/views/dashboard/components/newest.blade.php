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

<div class="max-w-2xl basis-1/4 p-6 bg-white border border-gray-300 rounded-lg shadow-sm">
  <h5 class="mb-3 text-2xl font-semibold text-center tracking-tight text-gray-900">
    Terbaru
  </h5>
  <div>
    @foreach($achievements as $achievement)
      <div class="flex flex-col gap-1 border-t-2 border-gray-700 py-4">
        <span>{{$achievement->user->name}}</span>
        <span>{{$achievement->user->nim}}</span>
        <span>{{ getRankDescription($achievement->rank_id) }} {{$achievement->name}}</span>
      </div>
    @endforeach
    <div class="border-t-2 border-gray-700"></div>
  </div>
</div>
