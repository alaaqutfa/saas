@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="container">
        <!-- Session Status -->
        @if (session('status'))
            <div class='mb-4 font-medium text-sm text-green-600'>
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class='block font-medium text-sm text-gray-700'>
                    {{ __('Email') }}
                </label>
                <input type="email" name="email" id="email" autofocus autocomplete="username"
                    class='block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'
                    value="{{ old('email') }}" required />
                @php($messages = $errors->get('email'))
                @if ($messages)
                    <ul class='mt-2 text-sm text-red-600 space-y-1'>
                        @foreach ((array) $messages as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <!-- Password -->
            <div>
                <label for="password" class='block font-medium text-sm text-gray-700'>
                    {{ __('Password') }}
                </label>
                <input type="password" name="password" id="password" autocomplete="current-password"
                    class='block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'
                    value="{{ old('email') }}" required />
                @php($messages = $errors->get('password'))
                @if ($messages)
                    <ul class='mt-2 text-sm text-red-600 space-y-1'>
                        @foreach ((array) $messages as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
@endsection
