<x-guest-layout>
    <div class="min-h-screen mt-10 px-5 md:flex md:items-center md:justify-center">
        <div class="md:shadow-lg md:p-12">
            <!-- Validation Errors -->
            <div class="mb-10 text-center md:mb-16">
                <h1 class="text-2xl uppercase mb-4">Register</h1>
            </div>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="md:mx-auto" style=" min-width: 540px;">
                    <!-- Name -->
                    <div>
                        <div>
                            <label class="block text-lg mb-4" for="name">Name</label>
                            <input
                                class="ring-0 bg-dim outline-none focus:outline-none block w-full px-1 py-3 border-b-2 border-gray-500 focus:border-accent"
                                type="text" name="name" value="{{ old('name') }}" required autofocus>
                        </div>
                    </div>
                    <!-- Email Address -->
                    <div class="mt-4">
                        <label class="block text-lg mb-4" for="email">Email</label>
                        <input
                            class="ring-0 bg-dim outline-none focus:outline-none block w-full px-1 py-3 border-b-2 border-gray-500 focus:border-accent"
                            type="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    <!-- Password -->
                    <div class="mt-4">
                        <label class="block text-lg mb-4" for="password">Password</label>
                        <input
                            class="ring-0 bg-dim outline-none focus:outline-none block w-full px-1 py-3 border-b-2 border-gray-500 focus:border-accent"
                            type="password" name="password" required autocomplete="new-password">
                    </div>
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label class="block text-lg mb-4" for="password_confirmation">Confirm Password</label>
                        <input
                            class="ring-0 bg-dim outline-none focus:outline-none block w-full px-1 py-3 border-b-2 border-gray-500 focus:border-accent"
                            type="password" name="password_confirmation" required>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                        <button
                            class="ml-4 border border-transparent outline-none focus:outline-none px-6 py-2 uppercase text-sm bg-accent text-white transition duration-300 ease-in hover:bg-white hover:text-accent hover:border-accent">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
