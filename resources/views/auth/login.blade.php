<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
               <h3>logo</h3>
            </a>
        </x-slot>

        <link rel="stylesheet" href="{{asset('assets/sing_in/style.css')}}">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <header>تسجيل الدخول</header>


           <!-- Validation Errors -->
           <x-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('البريد الالكتروني')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('كلمة المرور')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="button">

                <button class="submit">
                    {{ __('تسجيل دخول') }}
                </button>

            </div>

            <div class="pass-txt">
                @if (Route::has('password.request'))

            <a  href="{{ route('password.request') }}">
                {{ __('هل نسيت كلمة المرور ؟') }}
            </a>
            @endif
        </div>
        </form>
    </x-auth-card>
</x-guest-layout>
