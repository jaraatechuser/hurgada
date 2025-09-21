<x-guest-layout>
    <!-- Welcome Message -->
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-rose-800 font-serif italic mb-2">Join Our Community</h2>
        <p class="text-rose-600 font-medium">Create your account and start exploring</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Full Name')" />
            <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your full name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter your email address" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Create a secure password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Terms and Privacy -->
        <div class="flex items-start">
            <input id="terms" type="checkbox" class="mt-1 rounded border-rose-300 text-rose-600 shadow-sm focus:ring-rose-200 focus:ring-offset-0" required>
            <label for="terms" class="ml-2 text-sm text-rose-700">
                I agree to the 
                <a href="#" class="text-rose-800 hover:text-rose-900 font-medium underline">Terms of Service</a> 
                and 
                <a href="#" class="text-rose-800 hover:text-rose-900 font-medium underline">Privacy Policy</a>
            </label>
        </div>

        <!-- Submit Button -->
        <div class="pt-4">
            <x-primary-button class="w-full">
                {{ __('Create Account') }}
            </x-primary-button>
        </div>

        <!-- Login Link -->
        <div class="text-center pt-4 border-t border-rose-100">
            <p class="text-sm text-rose-600">
                Already have an account? 
                <a href="{{ route('login') }}" class="font-medium text-rose-800 hover:text-rose-900 transition-colors duration-200">
                    Sign in here
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>
