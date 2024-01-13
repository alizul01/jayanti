@extends('layout.admin')

@section('content')
  <div class="bg-white p-5 relative max-h-screen overflow-x-auto shadow-md sm:rounded-lg">
    <h1 class="text-2xl font-semibold text-left text-gray-900">
      Ubah Kompetisi
    </h1>
    <form action="{{ route('competitions.update', ['competition' => $competition->id]) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
          Nama Kompetisi
        </label>
        <input type="text" id="name" name="name" value="{{ $competition->name }}"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
               required>
        @error('name')
        <p class="text-red-500 font-light">
          {{$message}}
        </p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900">
          Deskripsi Kompetisi
        </label>
        <textarea
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
          name="description" rows="3">{{ $competition->description }}</textarea>
        @error('description')
        <p class="text-red-500 font-light">
          {{$message}}
        </p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="type" class="block mb-2 text-sm font-medium text-gray-900">
          Jenis Kompetisi
        </label>
        <select id="type" name="type"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
                required>
                <option value="">Pilih Jenis Kompetisi</option>
                <option value="Karya Ilmiah" {{ $competition->type == 'Karya Ilmiah' ? 'selected' : '' }}>Karya Ilmiah</option>
                <option value="Business Plan" {{ $competition->type == 'Business Plan' ? 'selected' : '' }}>Business Plan</option>
                <option value="Poster" {{ $competition->type == 'Poster' ? 'selected' : '' }}>Poster</option>
                <option value="Creative" {{ $competition->type == 'Creative' ? 'selected' : '' }}>Creative</option>
                <option value="Technology" {{ $competition->type == 'Technology' ? 'selected' : '' }}>Technology</option>

        </select>
      </div>

      <div class="mb-6">
        <label for="location" class="block mb-2 text-sm font-medium text-gray-900">
          Lokasi Kompetisi
        </label>
        <div class="mb-6">
          <label for="province" class="block mb-2 text-sm font-medium text-gray-900">
            Provinsi
          </label>
          <select id="province" name="province"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
                  >
            <option value="">Pilih Provinsi</option>
          </select>
        </div>
        @error('province')
        <p class="text-red-500 font-light">
          {{$message}}
        </p>
        @enderror
        <div class="mb-6">
          <label for="city" class="block mb-2 text-sm font-medium text-gray-900">
            Kota/Kabupaten
          </label>
          <select id="city" name="city"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
                  >
            <option value="">Pilih Kota/Kabupaten</option>
          </select>
        </div>
        @error('city')
        <p class="text-red-500 font-light">
          {{$message}}
        </p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="organizer" class="block mb-2 text-sm font-medium text-gray-900">
          Penyelenggara Kompetisi
        </label>
        <input type="text" id="organizer" name="organizer" value="{{ $competition->organizer }}"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
               required>
        @error('organizer')
        <p class="text-red-500 font-light">
          {{$message}}
        </p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="date" class="block mb-2 text-sm font-medium text-gray-900">
          Tanggal Kompetisi
        </label>
        <div class="flex justify-between items-center gap-3">
          <input type="date" id="start_date" name="start_date" value="{{ \Carbon\Carbon::parse($competition->start_date)->format('Y-m-d') }}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
                 required>
          @error('start_date')
          <p class="text-red-500 font-light">
            {{$message}}
          </p>
          @enderror
          <p>Sampai</p>
          <input type="date" id="end_date" name="end_date" value="{{ \Carbon\Carbon::parse($competition->end_date)->format('Y-m-d') }}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
                 required>
          @error('end_date')
          <p class="text-red-500 font-light">
            {{$message}}
          </p>
          @enderror
        </div>
      </div>
      <button type="submit"
              class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
        Simpan
      </button>
    </form>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const provinceDropdown = document.getElementById("province");
      fetch("https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json")
        .then(response => response.json())
        .then(provinces => {
          provinces.forEach(province => {
            const option = document.createElement("option");
            option.value = province.id;
            option.textContent = province.name;
            provinceDropdown.appendChild(option);
          });
        });

      const cityDropdown = document.getElementById("city");
      provinceDropdown.addEventListener("change", function () {
        const selectedProvinceId = this.value;
        cityDropdown.innerHTML = '<option value="">Pilih Kota/Kabupaten</option>';
        if (selectedProvinceId) {
          fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${selectedProvinceId}.json`)
            .then(response => response.json())
            .then(regencies => {
              regencies.forEach(regency => {
                const option = document.createElement("option");
                option.value = regency.id;
                option.textContent = regency.name;
                cityDropdown.appendChild(option);
              });
            });
        }
      });
    });
  </script>
@endsection
