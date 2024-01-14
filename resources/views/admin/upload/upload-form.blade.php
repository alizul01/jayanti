@extends('layout.admin')
@section('content')
  <section class="relative overflow-x-auto shadow-md sm:rounded-lg p-4 bg-white">
    <h1 class="text-xl text-gray-900 text-left mb-8">
      Upload Data Mahasiswa
    </h1>

    <form action="{{ route('import.upload') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mb-8">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="excel_file">Upload file</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="excel_file_help" id="excel_file" type="file" name="excel_file">
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
          File yang diupload harus berformat .xlsx
        </p>
      </div>
      <button type="submit" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-purple-700 border border-transparent rounded-md hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
        Upload Data
      </button>
    </form>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif



  </section>
@endsection
