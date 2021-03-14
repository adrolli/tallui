<div class="px-4 py-8 bg-white shadow sm:rounded-md sm:px-10">

    <x-tallui.auth.validation-login />

    @if (session('status'))
    <div class="mb-4 text-sm font-medium text-green-600">
        {{ session('status') }}
    </div>
    @endif

    <h2 class="text-3xl font-extrabold text-center text-gray-700">
        {{ __('tallui::auth.signin') }}
    </h2>

    @if (Route::has('register'))
    <p class="mt-2 text-sm text-center text-gray-600 max-w">
        {{ __('tallui::main.or') }}
            <a href="{{ route('register') }}" class="font-medium text-primary-700 hover:text-primary-500">{{ __('tallui::auth.register_free') }}</a>
    </p>
    @endif

    <form wire:submit.prevent="submitLogin" class="space-y-6" method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-tallui.label for="email" value="{{ __('tallui::main.email_address') }}" />
            <div class="mt-1">
                <x-tallui.input wire:model.defer="email" id="email" name="email" type="email" autocomplete="email" required :value="old('email')" autofocus class="disableme" />
            </div>
        </div>

        <div>
            <x-tallui.label for="password" value="{{ __('tallui::main.password') }}" />
            <div class="mt-1">
                <x-tallui.input wire:model.defer="password" id="password" class="disableme" type="password" name="password" required autocomplete="current-password" class="disableme" />
            </div>
        </div>

        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <x-tallui.checkbox id="remember_me" name="remember_me" class="disableme" />
                <label for="remember_me" class="block ml-2 text-sm text-gray-900">
                    {{ __('tallui::auth.remember_me') }}
                </label>
            </div>

            <div class="text-sm">
                @if (Route::has('password.request'))
                <a class="font-medium text-primary-600 hover:text-primary-500" href="{{ route('password.request') }}">
                    {{ __('tallui::auth.forgot_your_password') }}
                </a>
            @endif
            </div>
        </div>

        <div>
            <x-tallui.button type="submit" value="{{ __('tallui::auth.signin') }}" class="disableme" />
        </div>

    </form>

    <!-- TODO: Social Login -->
    <!-- x-tallui.auth.social-auth /-->

</div>
