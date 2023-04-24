@extends('layouts.app')

@section('content')

<div class="flex justify-center items-center h-screen bg-gradient-to-tr from-black to-gray-700 mix-blend-overlay relative" style="background-image: linear-gradient(0deg, rgba(7, 5, 1, 0.5), rgba(7, 5, 2, 0.5)), url('/image/register.jpg');">
    <div class="w-96 p-6 shadow-lg bg-gradient-to-r from-gray-600 to-red-700 rounded-md">
        <h1 class="text-3xl block text-center font-semibold text-white">Register</h1>
        <hr class="mt-3">
        <div class="mt-3">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <label for="name" class="text-white block text-base mb-2">{{ __('Name') }}</label>
                <input id="name" type="text" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your name" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="mt-3">
            <label for="email" class="text-white block text-base mb-2">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="mt-3">
            <label for="password" class="text-white block text-base mb-2">{{ __('Password') }}</label>
            <input id="password" type="password" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600 form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mt-3 flex justify-between items-center">
        <div>
            <label for="password-confirm" class="text-white block text-base mb-2">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="border w-[337px] text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600 form-control" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
            </label>
        </div>
        </div>
        <div class="mt-5">
            <button type="submit" class="border-2 border-gray-700 bg-gray-700 text-white py-1 w-full rounded-md hover:bg-transparent hover:text-gray-700 font-semibold">
                {{ __('Register') }}
            </button>
    </div>
</div>
    </div>
</form>

@endsection
