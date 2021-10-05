<x-guest-layout>
    <!-- Session Status -->
    <div class="min-h-screen mt-10 px-5 md:flex md:items-center md:justify-center">
        <div class="md:shadow-lg md:p-12">
            <div class="mb-10 text-center md:mb-16">
                <h1 class="text-2xl uppercase mb-4">Login</h1>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            {{-- Form --}}
            <form method="POST" action="{{ route('login') }}">
                <div class="md:mx-auto" style=" min-width: 540px;">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <label class="block text-lg mb-4" for=" email">Email</label>
                        <input
                            class="ring-0 bg-dim outline-none focus:outline-none block w-full px-1 py-3 border-b-2 border-accent"
                            type="email" name="email" value="{{ old('email') }}">
                    </div>
                    <!-- Password -->
                    <div class="mt-4">
                        <label class="block text-lg mb-4" for=" email">Password</label>
                        <input
                            class="ring-0 bg-dim outline-none focus:outline-none block w-full px-1 py-3 border-b-2 border-accent"
                            type="password" name="password" value="{{ old('password') }}">
                    </div>
                    <!-- Remember Me -->
                    <div class=" block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        <button
                            class="ml-4 border border-transparent outline-none focus:outline-none px-6 py-2 uppercase text-sm bg-accent text-white transition duration-300 ease-in hover:bg-white hover:text-accent hover:border-accent">
                            Log In
                        </button>
                    </div>
                    <div class="mt-8 text-center">
                        <a class="text-accent" href=" {{ route('register') }}">No accout ? Register now.</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
