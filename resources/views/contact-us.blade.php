@extends('layout.app')

@section('content')
  <x-navbar />

  @if (session('flash'))
    <div class="z-10 mx-auto w-3/4 rounded p-5 text-center">
      {{ session('flash') }}
    </div>
  @endif

  <section class="body-font relative bg-gray-900 text-gray-400">
    <div class="container mx-auto px-5 py-24">
      <div class="mb-12 flex w-full flex-col text-center">
        <h1 class="title-font mb-4 text-2xl font-medium text-white sm:text-3xl">Contact Us</h1>
        <p class="mx-auto text-base leading-relaxed lg:w-2/3">We’ll link you to the right person fast.</p>
      </div>
      <div class="mx-auto md:w-2/3 lg:w-1/2">
        <form method="POST" action="{{ route('contact-us') }}" class="-m-2 flex flex-wrap">
          @csrf
          <div class="w-1/2 p-2">
            <div class="relative">
              <label for="name" class="text-sm leading-7 text-gray-400">Name</label>
              <input type="text" id="name" name="name" value="{{ old('name') }}"
                class="@error('name') border-red-500
                @else
                border-gray-600 @enderror w-full rounded border bg-gray-800 bg-opacity-40 py-1 px-3 text-base leading-8 text-gray-100 outline-none transition-colors duration-200 ease-in-out focus:border-green-500 focus:bg-gray-900 focus:ring-2 focus:ring-green-900">

              @error('name')
                <span class="mt-2 text-sm text-red-500">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="w-1/2 p-2">
            <div class="relative">
              <label for="email" class="text-sm leading-7 text-gray-400">Email</label>
              <input type="email" id="email" name="email" value="{{ old('email') }}"
                class="@error('email') border-red-500
                @else
                border-gray-600 @enderror w-full rounded border bg-gray-800 bg-opacity-40 py-1 px-3 text-base leading-8 text-gray-100 outline-none transition-colors duration-200 ease-in-out focus:border-green-500 focus:bg-gray-900 focus:ring-2 focus:ring-green-900">

              @error('email')
                <span class="mt-2 text-sm text-red-500">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="w-full p-2">
            <div class="relative">
              <label for="message" class="text-sm leading-7 text-gray-400">Message</label>
              <textarea id="message" name="message"
                class="@error('message') border-red-500
                @else
                border-gray-600 @enderror h-32 w-full resize-none rounded border bg-gray-800 bg-opacity-40 py-1 px-3 text-base leading-6 text-gray-100 outline-none transition-colors duration-200 ease-in-out focus:border-green-500 focus:bg-gray-900 focus:ring-2 focus:ring-green-900">{{ old('message') }}</textarea>

              @error('message')
                <span class="mt-2 text-sm text-red-500">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="w-full p-2 text-center">
            <button type="submit"
              class="mx-auto block w-full rounded border-0 bg-green-500 py-2 px-8 text-lg text-white hover:bg-green-600 focus:outline-none">Send</button>
          </div>
          <div class="mt-8 w-full border-t border-gray-800 p-2 pt-8 text-center">
            <span class="inline-flex">
              <a class="text-gray-500" href="#">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="h-5 w-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-4 text-gray-500" href="#">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="h-5 w-5" viewBox="0 0 24 24">
                  <path
                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                  </path>
                </svg>
              </a>
              <a class="ml-4 text-gray-500" href="#">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="h-5 w-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
              <a class="ml-4 text-gray-500" href="#">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="h-5 w-5" viewBox="0 0 24 24">
                  <path
                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                  </path>
                </svg>
              </a>
            </span>
          </div>
        </form>
      </div>
    </div>
  </section>

  <x-footer />
@endsection
