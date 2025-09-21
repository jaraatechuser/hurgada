<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <!-- Welcome Message -->
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-rose-800 font-serif italic mb-2">Welcome Back</h2>
        <p class="text-rose-600 font-medium">Sign in to continue your journey</p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded border-rose-300 text-rose-600 shadow-sm focus:ring-rose-200 focus:ring-offset-0" name="remember">
                <span class="ml-2 text-sm text-rose-700 font-medium">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-rose-600 hover:text-rose-800 font-medium transition-colors duration-200" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <!-- Submit Button -->
        <div class="pt-4">
            <x-primary-button class="w-full">
                {{ __('Sign In') }}
            </x-primary-button>
        </div>

        <!-- Register Link -->
        @if (Route::has('register'))
            <div class="text-center pt-4 border-t border-rose-100">
                <p class="text-sm text-rose-600">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="font-medium text-rose-800 hover:text-rose-900 transition-colors duration-200">
                        Create one here
                    </a>
                </p>
            </div>
        @endif
    </form>
</x-guest-layout>
