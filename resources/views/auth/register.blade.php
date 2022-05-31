@extends('layout.app')


@section('content')
  <x-navbar />

  <section class="body-font bg-gray-900 text-gray-400">
    <div class="container mx-auto items-center px-5 py-24">
      <form method="POST" action="{{ route('register') }}"
        class="mt-10 flex w-full flex-col rounded-lg bg-gray-800 bg-opacity-50 p-8 md:mx-auto md:mt-0 md:w-1/2 lg:w-1/3">
        <h2 class="title-font mb-5 text-center text-3xl font-medium text-white">Register</h2>
        @csrf
        <div class="relative mb-4">
          <label for="name" class="text-sm leading-7 text-gray-400">Name</label>
          <input type="text" id="name" name="name" value="{{ old('name') }}"
            class="@error('name') border-red-500
            @else
            border-gray-600 @enderror w-full rounded border bg-gray-600 bg-opacity-20 py-1 px-3 text-base leading-8 text-gray-100 outline-none transition-colors duration-200 ease-in-out focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-900">

          @error('name')
            <span class="mt-2 text-sm text-red-500">{{ $message }}</span>
          @enderror
        </div>
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
        <div class="relative mb-4">
          <label for="password_confirmation" class="text-sm leading-7 text-gray-400">Confirm Password</label>
          <input type="password" id="password_confirmation" name="password_confirmation"
            class="@error('password_confirmation') border-red-500
            @else
            border-gray-600 @enderror w-full rounded border bg-gray-600 bg-opacity-20 py-1 px-3 text-base leading-8 text-gray-100 outline-none transition-colors duration-200 ease-in-out focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-900">

          @error('password_confirmation')
            <span class="mt-2 text-sm text-red-500">{{ $message }}</span>
          @enderror
        </div>
        <button type="submit"
          class="my-3 rounded border-0 bg-green-500 py-2 px-8 text-lg text-white hover:bg-green-600 focus:outline-none">Register</button>
        <p class="mt-3 text-sm">Already have an account? <a class="text-green-500 underline underline-offset-2"
            href="{{ route('login') }}">Login</a></p>
      </form>
    </div>
  </section>

  <x-footer />
@endsection
