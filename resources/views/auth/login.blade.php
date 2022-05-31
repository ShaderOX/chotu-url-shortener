@extends('layout.app')


@section('content')
  <x-navbar />

  <section class="body-font bg-gray-900 text-gray-400">
    <div class="container mx-auto items-center px-5 py-24">
      <div
        class="mt-10 flex w-full flex-col rounded-lg bg-gray-800 bg-opacity-50 p-8 md:mx-auto md:mt-0 md:w-1/2 lg:w-1/3">
        <h2 class="title-font mb-5 text-center text-3xl font-medium text-white">Login</h2>

        @if (session('status'))
          <div class="my-3 rounded bg-red-500 p-3 text-center text-white">
            {{ session('status') }}
          </div>
        @endif

        <form method="post" action="{{ route('login') }}">
          @csrf
          <div class="relative mb-4">
            <label for="email" class="text-sm leading-7 text-gray-400">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}"
              class="@error('email') border-red-500
            @else
            border-gray-600 @enderror w-full rounded border bg-gray-600 bg-opacity-20 py-1 px-3 text-base leading-8 text-gray-100 outline-none transition-colors duration-200 ease-in-out focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-900">

            @error('email')
              <span class="mt-2 text-sm text-red-500">{{ $message }}</span>
            @enderror

          </div>
          <div class="relative mb-4">
            <label for="password" class="text-sm leading-7 text-gray-400">Password</label>
            <input type="password" id="password" name="password"
              class="@error('password') border-red-500
            @else
            border-gray-600 @enderror w-full rounded border bg-gray-600 bg-opacity-20 py-1 px-3 text-base leading-8 text-gray-100 outline-none transition-colors duration-200 ease-in-out focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-900">

            @error('password')
              <span class="mt-2 text-sm text-red-500">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-4">
            <input
              class="float-left mt-1 mr-2 h-4 w-4 cursor-pointer appearance-none rounded-sm border border-gray-300 bg-white bg-contain bg-center bg-no-repeat align-top transition duration-200 checked:border-green-500 checked:bg-green-500 focus:outline-none"
              type="checkbox" id="remember_me" name="remember_me">
            <label class="form-check-label inline-block text-gray-400" for="remember_me">
              Remember Me</label>
          </div>
          <button type="submit"
            class="my-3 w-full rounded border-0 bg-green-500 py-2 px-8 text-lg text-white hover:bg-green-600 focus:outline-none">Login</button>
          <p class="mt-3 text-sm">Don't have an account? <a class="text-green-500 underline underline-offset-2"
              href="{{ route('register') }}">Register</a></p>
        </form>
      </div>
    </div>
  </section>

  <x-footer />
@endsection
