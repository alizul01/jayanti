@extends('layout.auth')

@section('content')
  <section class="bg-white px-16 md:px-24 py-12 rounded-lg shadow-md">
    <div>
      <h1 class="font-bold text-xl">
        Welcome to, Jayanti 👋
      </h1>
      <p class="text-sm text-gray-500">
        Please login to your account to continue
      </p>
    </div>

    <div>
      <form class="space-y-6 mt-8" action="{{ route('auth.login') }}" METHOD="POST">
        @csrf
        <div class="flex flex-col items-start">
          <label for="email" class="block mb-2 text-sm font-light text-slate-800">
            Email address
          </label>
          <input type="text" name="email" id="email" value="{{old('email')}}"
                 class="bg-white border text-gray-900 text-sm rounded-md focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 @error('email') border-red-500 @enderror placeholder-gray-800 placeholder-opacity-50"
                 required autocomplete="email" autofocus placeholder="nim@student.polinema.ac.id">
          @error('email')
          <p class="text-red-500">
            {{$message}}
          </p>
          @enderror
        </div>
        <div class="flex flex-col items-start">
          <label for="password" class="block mb-2 text-sm font-light text-slate-800">
            Password
          </label>
          <input type="password" name="password" id="password" value="{{@old('password')}}"
                 class="bg-white border text-gray-900 text-sm rounded-md focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 @error('password') border-red-500 @enderror placeholder-gray-800 placeholder-opacity-50"
                 required autocomplete="current-password" placeholder="********">
          @error('password')
          <p class="text-red-500">
            {{$message}}
          </p>
          @enderror
        </div>

        <div class="flex items-center gap-2">
          <button type="submit"
                  class="w-full text-white bg-purple-600 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Login
          </button>
        </div>
      </form>
      <p class="text-gray-500 text-xs text-center mt-4">
        By signing up, you agree to our Terms <br />  of Use
        and Privacy Policy.
      </p>
    </div>
  </section>
@endsection
