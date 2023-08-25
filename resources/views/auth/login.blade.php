@extends('layout.auth')

@section('content')
  <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 ">
    <form class="space-y-6" action="{{ route('auth.login') }}" METHOD="POST">
      @csrf
      <div class="flex justify-center">
        <h5 class="text-2xl font-bold text-gray-900">Login</h5>
      </div>
      <div class="flex flex-col items-center">
        <label for="email" class="block mb-2 text-md font-medium text-gray-900">
          Username
        </label>
        <input type="text" name="email" id="email" value="{{old('email')}}"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
               required>
        @error('email')
        <p class="text-red-500">
          {{$message}}
        </p>
        @enderror
      </div>
      <div class="flex flex-col items-center">
        <label for="password" class="block mb-2 text-md font-medium text-gray-900">
          Password
        </label>
        <input type="password" name="password" id="password" value="{{@old('password')}}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          required>
      </div>
      <div class="flex items-center gap-2">
        <button type="submit"
          class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
          Login
        </button>
      </div>
    </form>
  </div>
@endsection
