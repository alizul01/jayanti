<div class="max-w-2xl basis-1/4 p-6 bg-white border border-gray-300 rounded-lg shadow-sm">
  <h5 class="mb-3 text-2xl font-semibold text-center tracking-tight text-gray-900">
    Agenda Kompetisi
  </h5>
  @foreach($competitions as $item)
    <div class="flex flex-col gap-1 border-t-2 border-gray-700 py-4">
      <span>{{$item->name}}</span>
      <div class="flex justify-between items-center">
        <span>
          {{\Illuminate\Support\Carbon::parse($item->start_date)->format('D, d M Y')}}
        </span>
        <a href="{{ route('competitions.show', $item->id) }}"
           class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
          Link
        </a>
      </div>
    </div>
  @endforeach
  <div class="border-t-2 border-gray-700 py-2"></div>
  <a href="#"
     class="flex justify-end ml-auto max-w-fit px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
    Selengkapnya
  </a>
</div>
