@php
$routeName = Route::current()->getName();
$routeNameWords = explode('-', $routeName);

$routeNameWords = array_map(function ($word) {
    return ucfirst($word);
}, $routeNameWords);

@endphp

@section('title', implode(' ', $routeNameWords))


<!-- Navbar -->
<header class="body-font mx-auto bg-gray-900 text-gray-400 md:mx-5">
  <div class="container mx-auto flex flex-col flex-wrap items-center p-5 md:flex-row">
    <a class="title-font mb-4 flex items-center font-medium text-white md:mb-0" href="{{ route('home') }}">
      <img src="{{ asset('images/brand.png') }}" alt="Brand" class="h-14 w-10 rounded-lg bg-transparent">
    </a>
    <nav
      class="flex flex-wrap items-center justify-center text-base md:mr-auto md:ml-4 md:border-l md:border-gray-700 md:py-1 md:pl-4">
      <a class="@if ($routeName == 'home') font-semibold text-white underline underline-offset-2 @endif mr-5 hover:text-white"
        href="{{ route('home') }}">Home</a>
      <a class="@if ($routeName == 'plans') font-semibold text-white underline underline-offset-2 @endif mr-5 hover:text-white"
        href="{{ route('plans') }}">Plans</a>
      <a class="@if ($routeName == 'contact-us') font-semibold text-white underline underline-offset-2 @endif mr-5 hover:text-white"
        href="{{ route('contact-us') }}">Contact Us</a>
      <div>

        @guest
          <a class="@if ($routeName == 'login') font-semibold text-white underline underline-offset-2 @endif mr-5 hover:text-white"
            href="{{ route('login') }}">Login</a>
          <a class="@if ($routeName == 'register') font-semibold text-white underline underline-offset-2 @endif mr-5 hover:text-white"
            href="{{ route('register') }}">Register</a>
        @endguest

        @auth
          <button id="dropdownDefault" data-dropdown-toggle="dropdown"
            class="@if ($routeName == 'my-urls' || $routeName == 'register-url') font-semibold text-white underline underline-offset-2 @endif mr-5 inline-flex items-center hover:text-white"
            type="button">
            Dashboard
            <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>

          <div id="dropdown" class="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-gray-700 shadow"
            data-popper-placement="bottom"
            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(391.2px, 681.6px, 0px);">
            <ul class="py-1 text-sm" aria-labelledby="dropdownDefault">
              <li>
                <a href="{{ route('my-urls') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">View your
                  URLs</a>
              </li>
              <li>
                <a href="{{ route('register-url') }}"
                  class="block px-4 py-2 hover:bg-gray-600 hover:text-white">Register a new URL</a>
              </li>
            </ul>
          </div>

          <a class="mr-5 text-green-400 hover:text-green-500" href="#">{{ auth()->user()->name }}</a>
          <form action="{{ route('logout') }}" method="post" class="inline">
            @csrf
            <button type="submit" class="mr-5 hover:text-white">Logout</button>
          </form>
        @endauth

      </div>
    </nav>
    <div>
      <form class="my-4 flex sm:p-0">
        <input type="search" name="" id="" placeholder="Search"
          class="w-full rounded border border-gray-700 bg-gray-800 bg-opacity-40 py-1 px-3 text-base leading-8 text-gray-100 outline-none transition-colors duration-200 ease-in-out focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-900">
        <button type="submit"
          class="ml-1 rounded border-0 bg-green-500 py-1 px-4 text-white hover:bg-green-600 focus:outline-none">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            class="h-4 w-4" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
          <span class="sr-only">Go</span>
        </button>
      </form>
    </div>
  </div>
</header>
<!-- Navbar -->

<hr class="mx-auto w-4/6 border-gray-400 opacity-25" />
