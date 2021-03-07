@if (session()->has('error'))

    <div class="p-4 mb-4 rounded-md bg-red-50">
        <div class="text-sm font-medium text-red-800">

            {{ session('error') }}

        </div>
    </div>

@endif
