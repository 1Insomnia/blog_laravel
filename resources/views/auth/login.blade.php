<x-guest-layout>
    <!-- Session Status -->
    <div class="min-h-screen mt-10 px-5 md:flex md:items-center md:justify-center">
        <div class="md:shadow-lg md:p-12">

            <div class="mb-10 text-center">
                <h1 class="heading-1">Login</h1>
            </div>

            <!-- Validation Errors -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            {{-- Form --}}
            <form method="POST" action="{{ route('login') }}">
                <div class="md:mx-auto" style="width: 540px;">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <x-form.label for="email">Email</x-form.label>
                        <x-form.input type="email" name="email" value="{{ old('email') }}"></x-form.input>
                    </div>
                    <!-- Password -->
                    <div class="mt-4">
                        <x-form.label for="password">Password</x-form.label>
                        <x-form.input type="password" name="password" value="{{ old('password') }}"></x-form.input>
                    </div>
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="mt-6">
                        <button class="btn-success" type="submit">
                            Log In
                        </button>
                    </div>
                    <div class="mt-12 text-center">
                        @if (Route::has('password.request'))
                            <a class="text-success transition duration-200 ease-linear hover:text-success-light underline"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                    <div class="mt-4 text-center">
                        No account ?
                        <a class="text-success transition duration-200 ease-linear hover:text-success-light"
                            href=" {{ route('register') }}">
                            Register now.
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
