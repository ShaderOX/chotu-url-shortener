@extends('layout.app')

@section('content')
  <x-navbar />

  <section class="body-font overflow-hidden bg-gray-900 text-gray-400">
    <div class="container mx-auto px-5 py-24">
      <div class="mb-20 flex w-full flex-col text-center">
        <h1 class="title-font mb-2 text-3xl font-medium text-white sm:text-4xl">Pricing</h1>
        <p class="mx-auto text-base leading-relaxed lg:w-2/3">Get one essential solution to generate, share and track links
          for every form of communication. Choose your plan below.</p>

      </div>
      <div class="-m-4 flex flex-wrap">
        <div class="w-full p-4 md:w-1/2 xl:w-1/4">
          <div class="relative flex h-full flex-col overflow-hidden rounded-lg border-2 border-gray-700 p-6">
            <h2 class="title-font mb-1 text-sm font-medium tracking-widest text-gray-400">FREE</h2>
            <h1 class="mb-4 flex items-center border-b border-gray-800 pb-4 text-5xl leading-none text-white">
              <span>$0</span>
              <span class="ml-1 text-lg font-normal text-gray-400">/mo</span>
            </h1>
            <p class="mb-2 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Customizable back-halves
            </p>
            <p class="mb-2 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Unlimited clicks
            </p>
            <p class="mb-6 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Link history and reporting
            </p>
            <button
              class="mt-auto flex w-full items-center rounded border-0 bg-gray-800 py-2 px-4 text-white hover:bg-gray-700 focus:outline-none">Get
              Started
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="ml-auto h-4 w-4" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="mt-3 text-xs text-gray-400"></p>
          </div>
        </div>
        <div class="w-full p-4 md:w-1/2 xl:w-1/4">
          <div class="relative flex h-full flex-col overflow-hidden rounded-lg border-2 border-green-500 p-6">
            <span
              class="absolute right-0 top-0 rounded-bl bg-green-500 px-3 py-1 text-xs tracking-widest text-white">POPULAR</span>
            <h2 class="title-font mb-1 text-sm font-medium tracking-widest text-gray-400">BASIC</h2>
            <h1 class="mb-4 flex items-center border-b border-gray-800 pb-4 text-5xl leading-none text-white">
              <span>$38</span>
              <span class="ml-1 text-lg font-normal text-gray-400">/mo</span>
            </h1>
            <p class="mb-2 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Complimentary custom domain
            </p>
            <p class="mb-2 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Branded links
            </p>
            <p class="mb-2 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>QR Codes
            </p>
            <p class="mb-6 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Link redirects
            </p>
            <button
              class="mt-auto flex w-full items-center rounded border-0 bg-green-500 py-2 px-4 text-white hover:bg-green-600 focus:outline-none">Get
              Started
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="ml-auto h-4 w-4" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="mt-3 text-xs text-gray-400">(annual one-time charge of $348)</p>
          </div>
        </div>
        <div class="w-full p-4 md:w-1/2 xl:w-1/4">
          <div class="relative flex h-full flex-col overflow-hidden rounded-lg border-2 border-gray-700 p-6">
            <h2 class="title-font mb-1 text-sm font-medium tracking-widest text-gray-400">PREMIUM</h2>
            <h1 class="mb-4 flex items-center border-b border-gray-800 pb-4 text-5xl leading-none text-white">
              <span>$56</span>
              <span class="ml-1 text-lg font-normal text-gray-400">/mo</span>
            </h1>
            <p class="mb-2 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Dashboard reporting
            </p>
            <p class="mb-2 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>QR Code Colors
            </p>
            <p class="mb-2 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Location and device type data
            </p>
            <p class="mb-2 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Mobile deep links
            </p>
            <p class="mb-6 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Bulk link shortening
            </p>
            <button
              class="mt-auto flex w-full items-center rounded border-0 bg-gray-800 py-2 px-4 text-white hover:bg-gray-700 focus:outline-none">Get
              Started
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="ml-auto h-4 w-4" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="mt-3 text-xs text-gray-400">(annual one-time charge of $2,388)</p>
          </div>
        </div>
        <div class="w-full p-4 md:w-1/2 xl:w-1/4">
          <div class="relative flex h-full flex-col overflow-hidden rounded-lg border-2 border-gray-700 p-6">
            <h2 class="title-font mb-1 text-sm font-medium tracking-widest text-gray-400">CUSTOM</h2>
            <h1 class="mb-4 flex items-center border-b border-gray-800 pb-4 text-5xl leading-none text-white">
              <span>$72</span>
              <span class="ml-1 text-lg font-normal text-gray-400">/mo</span>
            </h1>
            <p class="mb-2 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Multiple user seats and advanced group permissions
            </p>
            <p class="mb-2 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>At scale link generation
            </p>
            <p class="mb-2 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>99.9% SLA uptime
            </p>
            <p class="mb-2 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Comprehensive data and analytics
            </p>
            <p class="mb-6 flex items-center text-gray-400">
              <span
                class="mr-2 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full bg-gray-800 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="h-3 w-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Personalized onboarding and expert account manager support
            </p>
            <button
              class="mt-auto flex w-full items-center rounded border-0 bg-gray-800 py-2 px-4 text-white hover:bg-gray-700 focus:outline-none">Get
              Started
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="ml-auto h-4 w-4" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="mt-3 text-xs text-gray-400">(annual one-time charge to be calcuated)</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <x-footer />
@endsection
