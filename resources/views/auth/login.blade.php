<x-base-layout title="Login" bodyClass="page-login">
    <x-layouts.guess title="Login">

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mb-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded" name="remember">
                    <span class="ms-2 text-sm">{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Login Button -->
            <div class="mb-4">
                <button class="btn btn-primary btn-login w-full py-2 text-lg">Login</button>
            </div>

            <!-- Forgot Password -->
            @if (Route::has('password.request'))
            <div class="text-right mb-4">
                <a class="underline text-sm text-indigo-600 hover:text-indigo-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            </div>
            @endif

        </form>

        <x-slot:footerLinks>
            Don't have an account? -
            <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800">Click here to create one</a>
        </x-slot:footerLinks>
    </x-layouts.guess>
</x-base-layout>
