<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->
<footer class="bg-gray-800" aria-labelledby="footerHeading">
    <h2 id="footerHeading" class="sr-only">Footer</h2>
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:py-16 lg:px-8">
      <div class="pb-8 xl:grid xl:grid-cols-5 xl:gap-8">
        <div class="grid grid-cols-2 gap-8 xl:col-span-4">
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-sm font-semibold tracking-wider text-gray-400 uppercase">
                TallUI
              </h3>
              <ul class="mt-4 space-y-4">
                <li>
                  <a href="{{ route('welcome') }}" class="text-base text-gray-300 hover:text-white">
                    Welcome
                  </a>
                </li>

                <li>
                  <a href="{{ route('components') }}" class="text-base text-gray-300 hover:text-white">
                    Components
                  </a>
                </li>

                <li>
                    <a href="{{ route('accessibility') }}" class="text-base text-gray-300 hover:text-white">
                        Accessibility
                    </a>
                </li>

                <li>
                  <a href="{{ route('theme') }}" class="text-base text-gray-300 hover:text-white">
                    Theme
                  </a>
                </li>

                <li>
                  <a href="{{ route('get-it') }}" class="text-base text-gray-300 hover:text-white">
                    Get it
                  </a>
                </li>
              </ul>
            </div>
            <div class="mt-12 md:mt-0">
              <h3 class="text-sm font-semibold tracking-wider text-gray-400 uppercase">
                Learn
              </h3>
              <ul class="mt-4 space-y-4">
                <li>
                  <a href="{{ route('docs') }}" class="text-base text-gray-300 hover:text-white">
                    Docs
                  </a>
                </li>

                <li>
                  <a href="{{ route('blog') }}" class="text-base text-gray-300 hover:text-white">
                    Blog
                  </a>
                </li>

                <li>
                  <a href="{{ route('faq') }}" class="text-base text-gray-300 hover:text-white">
                    FAQ
                  </a>
                </li>

                <li>
                    <a href="{{ route('roadmap') }}" class="text-base text-gray-300 hover:text-white">
                      Roadmap
                    </a>
                  </li>

                  <li>
                    <a href="{{ route('issues') }}" class="text-base text-gray-300 hover:text-white">
                        Issues
                    </a>
                  </li>
              </ul>
            </div>
          </div>
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-sm font-semibold tracking-wider text-gray-400 uppercase">
                Legal
              </h3>
              <ul class="mt-4 space-y-4">
                <li>
                  <a href="{{ route('contact') }}" class="text-base text-gray-300 hover:text-white">
                    Contact
                  </a>
                </li>

                <li>
                  <a href="{{ route('imprint') }}" class="text-base text-gray-300 hover:text-white">
                    Imprint
                  </a>
                </li>

                <li>
                  <a href="{{ route('privacy') }}" class="text-base text-gray-300 hover:text-white">
                    Privacy
                  </a>
                </li>

                <li>
                  <a href="{{ route('policy') }}" class="text-base text-gray-300 hover:text-white">
                    Licence
                  </a>
                </li>

                <li>
                  <a href="{{ route('terms') }}" class="text-base text-gray-300 hover:text-white">
                    Terms
                  </a>
                </li>
              </ul>
            </div>
            <div class="mt-12 md:mt-0">
              <h3 class="text-sm font-semibold tracking-wider text-gray-400 uppercase">
                Tech Stack
              </h3>
              <ul class="mt-4 space-y-4">
                <li>
                  <a href="{{ route('laravel') }}" class="text-base text-gray-300 hover:text-white">
                    Laravel
                  </a>
                </li>

                <li>
                  <a href="{{ route('tailwind') }}" class="text-base text-gray-300 hover:text-white">
                    Tailwind
                  </a>
                </li>

                <li>
                    <a href="{{ route('alpinejs') }}" class="text-base text-gray-300 hover:text-white">
                      AlpineJS
                    </a>
                </li>

                <li>
                    <a href="{{ route('livewire') }}" class="text-base text-gray-300 hover:text-white">
                      Livewire
                    </a>
                </li>

                <li>
                    <a href="{{ route('tall-stack') }}" class="text-base text-gray-300 hover:text-white">
                      Tall-Stack
                    </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="mt-12 xl:mt-0">
          <h3 class="text-sm font-semibold tracking-wider text-gray-400 uppercase">
            Language
          </h3>
          <form class="mt-4 sm:max-w-xs">
            <fieldset class="w-full">
              <label for="language" class="sr-only">Language</label>
              <div class="relative">
                <select id="language" name="language" class="block w-full py-2 pl-3 pr-10 text-base text-white bg-gray-700 border border-transparent rounded-md appearance-none bg-none focus:outline-none focus:ring-white focus:border-white sm:text-sm">
                  <option selected>English</option>
                  <option>German</option>
                  <option>French</option>
                  <option>Spanish</option>
                  <option>русский</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                  <!-- Heroicon name: solid/chevron-down -->
                  <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
            </fieldset>

          </form>
        </div>
      </div>

      <div class="pt-8 mt-8 border-t border-gray-700 md:flex md:items-center md:justify-between">
        <div class="flex space-x-6 md:order-2">

          <a href="https://www.github.com/adrolli/tallui" class="text-gray-400 hover:text-gray-300">
            <span class="sr-only">GitHub</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
            </svg>
          </a>

        </div>
        <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
          &copy; 2021 TallUI, made with <span class="text-red-600">&hearts;</span> in Germany
        </p>
      </div>
    </div>
  </footer>
