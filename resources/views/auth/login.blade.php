<x-guest-layout>
    <div class="max-w-md w-full mx-auto p-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-[#0f2c59]">Welcome 👋</h1>
            <p class="text-sm text-gray-500">Log in to your <strong>Quotes App</strong> account</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-[#0f2c59]" />
                <x-text-input
                    id="email"
                    class="block mt-1 w-full border-gray-300 focus:border-yellow-400 focus:ring-yellow-400"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    placeholder="youremail@example.com"
                    autofocus
                    autocomplete="username"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" class="text-[#0f2c59]" />
                <x-text-input
                    id="password"
                    class="block mt-1 w-full border-gray-300 focus:border-yellow-400 focus:ring-yellow-400"
                    type="password"
                    name="password"
                    placeholder="********"
                    required
                    autocomplete="current-password"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember + Forgot -->
            <div class="flex items-center justify-between">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#0f2c59] shadow-sm focus:ring-[#f4b400]" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-sm text-[#0f2c59] hover:text-[#f4b400] font-medium" href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                @endif
            </div>

            <!-- Login Button -->
            <div>
                <x-primary-button class="w-full justify-center bg-blue-600 hover:bg-blue-700 text-white py-2 text-sm rounded-md transition">
                    🔑 Login
                </x-primary-button>
            </div>

            <!-- Register Link -->
            <div class="text-center text-sm text-gray-600 mt-4">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-yellow-500 font-semibold hover:underline">Sign up now</a>
            </div>
        </form>
    </div>
</x-guest-layout>
