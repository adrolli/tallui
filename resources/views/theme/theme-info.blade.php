<div class="pb-5 border-b border-gray-200">
    <div class="flex flex-wrap items-baseline -mt-2 -ml-2">
      <h3 class="mt-2 ml-2 text-lg font-medium leading-6 text-gray-900">
        Theme Info
      </h3>
      <p class="mt-1 ml-2 text-sm text-gray-500 truncate">colors</p>
    </div>
  </div>

@foreach ($tailwind->theme->colors AS $colorset => $colorsetting)

    @if (!is_string($colorsetting) && str_starts_with($colorset, "tui"))

        <x-tallui.theme.colorset :colorset="$colorset" :colorsetting="$colorsetting" />

    @endif

@endforeach

<br><hr><br>

<div class="flex flex-col space-y-3 text-xs sm:flex-row sm:space-y-0 sm:space-x-4">
    <div class="flex-shrink-0 w-32">
        <div class="flex flex-col justify-center h-10">
            <div class="text-sm font-semibold text-gray-900">tui-...</div>
        </div>
    </div>
    <div class="grid flex-1 min-w-0 grid-cols-5 2xl:grid-cols-10 gap-x-4 gap-y-3 2xl:gap-x-2">

@foreach ($tailwind->theme->colors AS $colorset => $colorsetting)

    @if (is_string($colorsetting) && str_starts_with($colorset, "tui"))

        <x-tallui.theme.color :singlecolor="substr($colorset, 4)" :hexcolor="$colorsetting" />

    @endif

@endforeach

</div>
</div>




<br><hr><br>
<x-tallui.cta.button  value="{{ __('tallui::auth.signin') }}" />




<div class="bg-tui-cta-bg">
    <div class="px-4 py-12 mx-auto text-center max-w-7xl sm:px-6 lg:py-16 lg:px-8">
      <h2 class="text-3xl font-extrabold tracking-tight text-tui-cta sm:text-4xl">
        <span class="block">Ready to dive in?</span>
        <span class="block">Start your free trial today.</span>
      </h2>
      <div class="flex justify-center mt-8">
        <div class="inline-flex rounded-md shadow">
          <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium border border-transparent rounded-md text-tui-cta-text bg-tui-cta hover:bg-indigo-700">
            Get started
          </a>
        </div>
        <div class="inline-flex ml-3">
          <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-indigo-700 border border-transparent rounded-md bg-tui-design hover:bg-indigo-200">
            Learn more
          </a>
        </div>
      </div>
    </div>
  </div>
