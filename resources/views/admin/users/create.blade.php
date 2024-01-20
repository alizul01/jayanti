@extends('layout.admin')

@section('content')
  <div class="bg-white p-5 relative max-h-screen overflow-x-auto shadow-md sm:rounded-lg">
    <h1 class="text-2xl font-semibold text-left text-gray-900">
      Tambah User
    </h1>
    <form class="my-5" action="{{ route('users.store') }}" method="POST">
      @csrf
      <div class="mb-6">
        <label for="nim" class="block mb-2 text-sm font-medium text-gray-900">
          NIM
        </label>
        <input type="text" id="nim" name="nim" value="{{ old('nim') }}"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
               required>
        @error('nim')
        <p class="text-red-500 font-light">
          {{$message}}
        </p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
          Nama User
        </label>
        <input type="text" id="name" name="name" value="{{ old('name') }}"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
               required>
        @error('name')
        <p class="text-red-500 font-light">
          {{$message}}
        </p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
          Email
        </label>
        <input type="email" id="email" name="email" value="{{ old('email') }}"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
               required>
        @error('email')
        <p class="text-red-500 font-light">
          {{$message}}
        </p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
          Password
        </label>
        <input type="password" id="password" name="password"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
               required>
        @error('password')
        <p class="text-red-500 font-light">
          {{$message}}
        </p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="role" class="block mb-2 text-sm font-medium text-gray-900">
          Role
        </label>
        <select id="role" name="role"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
                required>
          <option value="">Pilih Role</option>
          <option value="admin">Admin</option>
          <option value="superadmin">Superadmin</option>
          <option value="user">User</option>
        </select>
      </div>
      <div class="mb-6">
        <label for="study_program_id" class="block mb-2 text-sm font-medium text-gray-900">
          Program Studi
        </label>
        <select id="study_program_id" name="study_program_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5">
          <option value="">Pilih Program Studi</option>
          @foreach($studyPrograms as $studyProgram)
            <option value="{{ $studyProgram->id }}">{{ $studyProgram->name }}</option>
          @endforeach
        </select>
      </div>
      <button type="submit"
              class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
        Tambah
      </button>
    </form>
  </div>
@endsection
