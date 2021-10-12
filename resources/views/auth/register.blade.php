<x-guest-layout>
    <div class="min-h-screen mt-10 px-5 md:flex md:items-center md:justify-center">
        <div class="md:shadow-lg md:p-12">
            <!-- Validation Errors -->
            <div class="mb-10 text-center md:mb-16">
                <h1 class="heading-1 mb-10">Register</h1>
            </div>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            {{-- Form --}}
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="md:mx-auto" style="width: 540px;">
                    <!-- Name -->
                    <div>
                        <div>
                            <x-form.label for="name">Name</x-form.label>
                            <x-form.input type="text" name="name" value="{{ old('name') }}" required autofocus>
                            </x-form.input>
                        </div>
                    </div>
                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-form.label for="email">Email</x-form.label>
                        <x-form.input type="email" name="email" value="{{ old('email') }}" required></x-form.input>
                    </div>
                    <!-- Password -->
                    <div class="mt-4">
                        <x-form.label for="password">Password</x-form.label>
                        <x-form.input type="password" name="password" required autocomplete="new-password">
                        </x-form.input>
                    </div>
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-form.label for="password_confirmation">Confirm Password</x-form.label>
                        <x-form.input type="password" name="password_confirmation" required></x-form.input>
                    </div>
                    <div class="mt-8">
                        <button class="btn-success">
                            Register
                        </button>
                    </div>
                    <div class="mt-12 text-center">
                        Already registered ?
                        <a class="text-success transition duration-200 ease-linear hover:text-success-light"
                            href="{{ route('login') }}">
                            Login
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
