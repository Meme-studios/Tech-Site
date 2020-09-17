<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label style="font-size: 16px;" value="{{ __('Username') }}" />
                <p style="font-size: 12px;">(can be changed later)</p>
                <x-jet-input class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            </div>

            <div>
                <x-jet-label style="font-size: 16px;" value="{{ __('First Name') }}" />
                <p style="font-size: 12px;">(not required)</p>
                <x-jet-input class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" autofocus autocomplete="first_name" />
            </div>

            <div>
                <x-jet-label style="font-size: 16px;" value="{{ __('Last Name') }}" />
                <p style="font-size: 12px;">(not required)</p>
                <x-jet-input class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" autofocus autocomplete="last_name" />
            </div>

            <div class="mt-4">
                <x-jet-label style="font-size: 16px;" value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label style="font-size: 16px;" value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label style="font-size: 16px;" value="{{ __('Confirm Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
