  <!-- Footer -->
  <footer class="body-font w-full bg-gray-900 text-gray-400">
    <div class="container mx-auto mt-8 bg-gray-800 px-5 py-16 opacity-75">
      <div class="order-first flex w-full flex-wrap items-start justify-evenly text-center md:text-center">
        <div class="w-full px-4 md:w-1/2 lg:w-1/4">
          <h2 class="title-font mb-3 font-medium tracking-widest text-white">Why Chotu?</h2>
          <nav class="mb-10 list-none">
            <li>
              <a class="text-gray-400 hover:text-white" href="{{ route('home') }}">Chotu 101</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white" href="{{ route('contact-us') }}">Terms of service</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white" href="{{ route('plans') }}">Pricing</a>
            </li>
          </nav>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/4">
          <h2 class="title-font mb-3 font-medium tracking-widest text-white">Solutions</h2>
          <nav class="mb-10 list-none">
            <li>
              <a class="text-gray-400 hover:text-white" href="#">Social Media</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white" href="{{ route('contact-us') }}">Customer Service</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white" href="#">Reviews</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white" href="{{ route('contact-us') }}">Contact Us</a>
            </li>
          </nav>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/4">
          <h2 class="title-font mb-3 font-medium tracking-widest text-white">Company</h2>
          <nav class="mb-10 list-none">
            <li>
              <a class="text-gray-400 hover:text-white" href="#">About Chotu</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white" href="#">Our Team</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white" href="{{ route('contact-us') }}">Support</a>
            </li>
          </nav>
        </div>
      </div>
    </div>
    <div class="bg-gray-800 bg-opacity-75 md:px-5">
      <div class="container mx-auto flex flex-col items-center px-5 py-6 sm:flex-row">
        <a class="title-font flex items-center justify-center font-medium text-white md:justify-start"
          href="{{ route('home') }}">
          <img src="{{ asset('images/brand.png') }}" alt="Brand" class="h-14 w-10 rounded-lg bg-transparent">
          <span class="ml-3 text-xl">Chotu</span>
        </a>
        <p class="mt-4 text-sm text-gray-400 sm:ml-6 sm:mt-0">© 2022 Chotu LLC —
          <a href="https://twitter.com/chotu-online" class="ml-1 text-gray-500" target="_blank"
            rel="noopener noreferrer">@chotu-online</a>
        </p>
        <span class="mt-4 inline-flex justify-center sm:ml-auto sm:mt-0 sm:justify-start">
          <a class="text-gray-400" href="#">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="h-5 w-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-400" href="#">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="h-5 w-5" viewBox="0 0 24 24">
              <path
                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
              </path>
            </svg>
          </a>
          <a class="ml-3 text-gray-400" href="#">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="h-5 w-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-400" href="#">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="0" class="h-5 w-5" viewBox="0 0 24 24">
              <path stroke="none"
                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
  </footer>
  <!-- Footer -->
