<div class="flex flex-col space-y-3 text-xs sm:flex-row sm:space-y-0 sm:space-x-4">
    <div class="flex-shrink-0 w-32">
        <div class="flex flex-col justify-center h-10">
            <div class="text-sm font-semibold text-gray-900">{{ $colorset }}</div>
        </div>
    </div>
    <div class="grid flex-1 min-w-0 grid-cols-5 2xl:grid-cols-10 gap-x-4 gap-y-3 2xl:gap-x-2">
        @foreach ($colorsetting AS $singlecolor => $hexcolor)

        <x-tallui.theme.color :singlecolor="$singlecolor" :hexcolor="$hexcolor" />

       @endforeach
    </div>
</div>
