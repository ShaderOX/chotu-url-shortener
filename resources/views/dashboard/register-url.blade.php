@extends('layout.app')


@section('content')
  <x-navbar />

  <form method="POST" action="{{ route('register-url') }}"
    class="mx-auto flex w-full flex-col justify-center rounded-lg bg-gray-800 bg-opacity-50 p-8 md:mx-auto md:mt-0 lg:w-2/3">
    <h2 class="title-font mb-5 text-center text-3xl font-medium text-white">URL Mapping</h2>
    @csrf
    <div class="mb-4 flex content-evenly items-center">
      <div class="w-1/2 p-2">
        <div class="relative">
          <div class="w-1/3">
            <label for="d-suffix" class="text-sm leading-7 text-gray-400">URL Suffix</label>
            <input type="url" id="d-suffix" name="d-suffix" disabled value="{{ env('APP_URL') }}/"
              class="w-full min-w-fit rounded border border-r-0 border-gray-700 bg-gray-800 bg-opacity-40 py-1 px-3 font-mono text-xs leading-8 text-gray-400 outline-none transition-colors duration-200 ease-in-out">
          </div>
          <div class="absolute right-0 bottom-0 w-2/3">
            <label for="suffix" class="sr-only text-sm leading-7 text-gray-400"></label>
            <input type="text" id="suffix" name="suffix" value="{{ old('suffix') }}"
              class="@error('suffix') border-red-500
            @else
            border-gray-600 @enderror w-full rounded border bg-gray-800 bg-opacity-40 py-1 px-3 text-base leading-8 text-gray-100 outline-none transition-colors duration-200 ease-in-out focus:border-green-500 focus:bg-gray-900 focus:ring-2 focus:ring-green-900">
          </div>
        </div>
        @error('suffix')
          <span class="mt-2 text-sm text-red-500">{{ $message }}</span>
        @enderror
        <span class="mt-2 text-sm" id="isAvailable"></span>
      </div>
      <div class="mx-auto flex w-1/2 flex-col justify-start self-stretch p-2">
        <label for="maps_to" class="text-sm leading-7 text-gray-400">Maps to</label>
        <input type="url" id="maps_to" name="maps_to" value="{{ old('maps_to') }}"
          class="@error('maps_to') border-red-500
            @else
            border-gray-600 @enderror w-full rounded border bg-gray-800 bg-opacity-40 py-1 px-3 text-base leading-8 text-gray-100 outline-none transition-colors duration-200 ease-in-out focus:border-green-500 focus:bg-gray-900 focus:ring-2 focus:ring-green-900">
        @error('maps_to')
          <span class="mt-2 text-sm text-red-500">{{ $message }}</span>
        @enderror
      </div>
    </div>
    <div class="w-full p-2">
      <button
        class="my-3 mx-auto w-full rounded border-0 bg-green-500 py-2 px-8 text-lg text-white hover:bg-green-600 focus:outline-none"
        type="submit">Map</button>
    </div>
  </form>

  <x-footer />
@endsection
