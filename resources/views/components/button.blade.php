@props(['value'])

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $value ?? $slot }}
</button>

