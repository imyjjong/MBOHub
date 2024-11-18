<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="" />
        </div>

        <!-- Email Address -->
        <div class="">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="" />
        </div>

        <!-- Password -->
        <div class="">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class=""
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="" />
        </div>

        <!-- Confirm Password -->
        <div class="">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class=""
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="" />
        </div>

        <div class="">
            <a class="" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>