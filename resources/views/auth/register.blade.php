<x-guest-layout>
    <div class="max-w-md w-full mx-auto p-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-[#0f2c59]">Create a New Account 👋</h1>
            <p class="text-sm text-gray-500">Join and share your best quotes on <strong>Quotes App</strong>!</p>
        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" class="text-[#0f2c59]" />
                <x-text-input
                    id="name"
                    class="block mt-1 w-full border-gray-300 focus:border-yellow-400 focus:ring-yellow-400"
                    type="text"
                    name="name"
                    :value="old('name')"
                    placeholder="Full Name"
                    required
                    autofocus
                    autocomplete="name"
                />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-[#0f2c59]" />
                <x-text-input
                    id="email"
                    class="block mt-1 w-full border-gray-300 focus:border-yellow-400 focus:ring-yellow-400"
                    type="email"
                    name="email"
                    :value="old('email')"
                    placeholder="youremail@example.com"
                    required
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
                    autocomplete="new-password"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-[#0f2c59]" />
                <x-text-input
                    id="password_confirmation"
                    class="block mt-1 w-full border-gray-300 focus:border-yellow-400 focus:ring-yellow-400"
                    type="password"
                    name="password_confirmation"
                    placeholder="********"
                    required
                    autocomplete="new-password"
                />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Register Button -->
            <div>
                <x-primary-button class="w-full justify-center bg-blue-600 hover:bg-blue-700 text-white py-2 text-lg rounded-md">
                    ✍️ Register
                </x-primary-button>
            </div>

            <!-- Link ke Login -->
            <div class="text-center text-sm text-gray-600 mt-4">
                Already have an account?
                <a href="{{ route('login') }}" class="text-yellow-500 font-semibold hover:underline">Log in now</a>
            </div>
        </form>
    </div>
</x-guest-layout>
