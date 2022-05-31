@extends('layout.app')


@section('content')
  <x-navbar />

  {{-- Hero --}}
  <section class="body-font mx-5 my-auto min-h-full bg-gray-900 text-gray-400">
    <div class="container mx-auto my-auto flex flex-col items-center px-5 py-24 md:flex-row">
      <div class="relative mb-10 w-5/6 md:mb-0 md:w-1/2 lg:w-full lg:max-w-lg">
        <!-- Text Animation -->
        <div class="animation">
          <div id="container">
            <span class="text-8xl text-green-500" id="text1"></span>
            <span class="text-8xl text-green-500" id="text2"></span>
          </div>

          <svg id="filters">
            <defs>
              <filter id="threshold">
                <feColorMatrix in="SourceGraphic" type="matrix" values="1 0 0 0 0
                                                      0 1 0 0 0
                                                      0 0 1 0 0
                                                      0 0 0 255 -140" />
              </filter>
            </defs>
          </svg>
        </div>
      </div>
      <div
        class="flex flex-col items-center text-center md:w-1/2 md:items-start md:pl-16 md:text-left lg:flex-grow lg:pl-24">
        <h1 class="title-font mb-4 text-3xl font-medium text-white sm:text-4xl">
          <br class="hidden lg:inline-block">Tired of having to send out long URLs?
        </h1>
        <p class="mb-8 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, ipsam.</p>
        <div class="flex justify-center">
          <a href="#getting-started"
            class="inline-flex rounded border-0 bg-green-500 py-2 px-6 text-lg text-white hover:bg-green-600 focus:outline-none">Get
            Started</a>
          <a href="{{ route('plans') }}"
            class="ml-4 inline-flex rounded border-0 bg-gray-800 py-2 px-6 text-lg text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none">View
            our plans</a>
        </div>
      </div>
    </div>
  </section>
  {{-- Hero --}}

  {{-- Features --}}
  <section class="body-font bg-gray-900 text-gray-400">
    <div class="container mx-auto px-5 py-24">
      <div class="mb-10 text-center">
        <h1 class="title-font mb-4 text-center text-3xl font-medium text-white sm:text-5xl">
          Features
        </h1>
        <!-- <p class="mx-auto text-base leading-relaxed lg:w-3/4 xl:w-2/4"></p> -->
      </div>
      <div class="-mx-2 flex flex-wrap sm:mx-auto sm:mb-2 lg:w-4/5">
        <div class="w-full p-2 sm:w-1/2">
          <div class="flex h-full items-center rounded bg-gray-800 p-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
              class="mr-4 h-6 w-6 flex-shrink-0 text-green-400" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
              <path d="M22 4L12 14.01l-3-3"></path>
            </svg>
            <span class="title-font font-medium text-white">Convenience</span>
          </div>
        </div>
        <div class="w-full p-2 sm:w-1/2">
          <div class="flex h-full items-center rounded bg-gray-800 p-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
              class="mr-4 h-6 w-6 flex-shrink-0 text-green-400" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
              <path d="M22 4L12 14.01l-3-3"></path>
            </svg>
            <span class="title-font font-medium text-white">Insights</span>
          </div>
        </div>
        <div class="w-full p-2 sm:w-1/2">
          <div class="flex h-full items-center rounded bg-gray-800 p-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
              class="mr-4 h-6 w-6 flex-shrink-0 text-green-400" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
              <path d="M22 4L12 14.01l-3-3"></path>
            </svg>
            <span class="title-font font-medium text-white">Increased sharing</span>
          </div>
        </div>
        <div class="w-full p-2 sm:w-1/2">
          <div class="flex h-full items-center rounded bg-gray-800 p-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
              class="mr-4 h-6 w-6 flex-shrink-0 text-green-400" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
              <path d="M22 4L12 14.01l-3-3"></path>
            </svg>
            <span class="title-font font-medium text-white">Professionalism</span>
          </div>
        </div>
        <div class="w-full p-2 sm:w-1/2">
          <div class="flex h-full items-center rounded bg-gray-800 p-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
              class="mr-4 h-6 w-6 flex-shrink-0 text-green-400" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
              <path d="M22 4L12 14.01l-3-3"></path>
            </svg>
            <span class="title-font font-medium text-white">Stronger engagement</span>
          </div>
        </div>
        <div class="w-full p-2 sm:w-1/2">
          <div class="flex h-full items-center rounded bg-gray-800 p-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
              class="mr-4 h-6 w-6 flex-shrink-0 text-green-400" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
              <path d="M22 4L12 14.01l-3-3"></path>
            </svg>
            <span class="title-font font-medium text-white">Economical Plans</span>
          </div>
        </div>
      </div>
      <a href="{{ route('register') }}">

        <button
          class="mx-auto mt-16 flex items-center justify-between rounded border-0 bg-green-500 py-2 px-5 text-lg text-white hover:bg-green-600 focus:outline-none">
          Start now
          <span><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="ml-2 h-4 w-4" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg></span></button>
      </a>
    </div>
  </section>
  {{-- Features --}}

  {{-- Getting Started --}}
  <section class="body-font bg-gray-900 py-24 text-gray-400">
    <div class="mb-10 text-center">
      <h1 id="getting-started" class="title-font mb-4 text-center text-3xl font-medium text-white sm:text-5xl">
        How it works
      </h1>
    </div>
    <div class="container mx-auto flex flex-wrap px-5">
      <div class="relative mx-auto flex pt-10 pb-20 sm:items-center md:w-2/3">
        <div class="absolute inset-0 flex h-full w-6 items-center justify-center">
          <div class="pointer-events-none h-full w-1 bg-gray-800"></div>
        </div>
        <div
          class="title-font relative z-10 mt-10 inline-flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-green-500 text-sm font-medium text-white sm:mt-0">
          1</div>
        <div class="flex flex-grow flex-col items-start pl-6 sm:flex-row sm:items-center md:pl-8">
          <div
            class="inline-flex h-24 w-24 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-green-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="h-12 w-12" viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
          </div>
          <div class="mt-6 flex-grow sm:mt-0 sm:pl-6">
            <h2 class="title-font mb-1 text-xl font-medium text-white">Create an account</h2>
            <p class="leading-relaxed">Start off by creating an account and/or choosing your plan</p>
          </div>
        </div>
      </div>
      <div class="relative mx-auto flex pb-20 sm:items-center md:w-2/3">
        <div class="absolute inset-0 flex h-full w-6 items-center justify-center">
          <div class="pointer-events-none h-full w-1 bg-gray-800"></div>
        </div>
        <div
          class="title-font relative z-10 mt-10 inline-flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-green-500 text-sm font-medium text-white sm:mt-0">
          2</div>
        <div class="flex flex-grow flex-col items-start pl-6 sm:flex-row sm:items-center md:pl-8">
          <div
            class="inline-flex h-24 w-24 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-green-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="h-12 w-12" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <div class="mt-6 flex-grow sm:mt-0 sm:pl-6">
            <h2 class="title-font mb-1 text-xl font-medium text-white">Register your custom URL</h2>
            <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard
              cliche palo santo offal.</p>
          </div>
        </div>
      </div>
      <div class="relative mx-auto flex pb-20 sm:items-center md:w-2/3">
        <div class="absolute inset-0 flex h-full w-6 items-center justify-center">
          <div class="pointer-events-none h-full w-1 bg-gray-800"></div>
        </div>
        <div
          class="title-font relative z-10 mt-10 inline-flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-green-500 text-sm font-medium text-white sm:mt-0">
          3</div>
        <div class="flex flex-grow flex-col items-start pl-6 sm:flex-row sm:items-center md:pl-8">
          <div
            class="inline-flex h-24 w-24 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-green-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="h-12 w-12" viewBox="0 0 24 24">
              <circle cx="12" cy="5" r="3"></circle>
              <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
            </svg>
          </div>
          <div class="mt-6 flex-grow sm:mt-0 sm:pl-6">
            <h2 class="title-font mb-1 text-xl font-medium text-white">Manage your URLs</h2>
            <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard
              cliche palo santo offal.</p>
          </div>
        </div>
      </div>
      <div class="relative mx-auto flex pb-10 sm:items-center md:w-2/3">
        <div class="absolute inset-0 flex h-full w-6 items-center justify-center">
          <div class="pointer-events-none h-full w-1 bg-gray-800"></div>
        </div>
        <div
          class="title-font relative z-10 mt-10 inline-flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-green-500 text-sm font-medium text-white sm:mt-0">
          4</div>
        <div class="flex flex-grow flex-col items-start pl-6 sm:flex-row sm:items-center md:pl-8">
          <div
            class="inline-flex h-24 w-24 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-green-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="h-12 w-12" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="mt-6 flex-grow sm:mt-0 sm:pl-6">
            <h2 class="title-font mb-1 text-xl font-medium text-white">Become a Premium Member</h2>
            <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard
              cliche palo santo offal.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Getting Started --}}

  <x-footer />
@endsection
