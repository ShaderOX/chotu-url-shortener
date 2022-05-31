@extends('layout.app')

@section('content')
  <x-navbar />

  <div class="relative mx-auto mt-5 w-3/4 overflow-x-auto shadow-md sm:rounded-lg">
    <div class="mb-10 text-center">
      <h1 class="title-font mb-4 text-center text-2xl font-medium text-white sm:text-4xl">
        Your URLs
      </h1>
    </div>

    @if ($urls->count())
      <table class="w-full text-center text-sm dark:text-gray-400">
        <thead class="text-md bg-gray-700 text-xs uppercase text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">
              URL
            </th>
            <th scope="col" class="px-6 py-3">
              Mapped URL
            </th>
            <th scope="col" class="px-6 py-3">
              Time till expiration
            </th>
            <th scope="col" class="px-6 py-3">
              <span class="sr-only">Edit</span>
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($urls as $url)
            <tr class="border-b border-gray-700 bg-gray-800">
              <td scope="row" class="whitespace-nowrap px-6 py-4 font-mono text-sm text-gray-200">
                <a href="https://chotu/r/{{ $url->suffix }}">
                  https://chotu/r/{{ $url->suffix }}
                </a>
              </td>
              <td class="px-6 py-4 font-mono text-sm">
                <a href="{{ $url->maps_to }}">
                  {{ $url->maps_to }}
                </a>
              </td>
              <td class="px-6 py-4">
                @php
                  $date = strtotime($url->expires_at);
                  $diff = $date - time();
                  $days = floor($diff / (60 * 60 * 24));
                  $hours = round(($diff - $days * 60 * 60 * 24) / (60 * 60));
                @endphp
                {{ $days }} days and {{ $hours }} hours left
              </td>
              <td class="px-6 py-4 text-right">
                <a href="{{ route('register-url') }}/{{ $url->id }}"
                  class="font-medium text-red-400 hover:underline">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <div class="mt-10 flex justify-center">
        {{ $urls->links() }}
      </div>
    @else
      <div class="my-5 text-center text-gray-500">
        <span class="text-lg">
          You have no URLs mapped.</span>
        <a href="{{ route('register-url') }}" class="text-green-500">
          Click here to add a new URL</a>
      </div>
    @endif
  </div>

  <x-footer />
@endsection
