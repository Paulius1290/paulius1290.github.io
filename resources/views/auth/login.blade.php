@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                               
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="flex justify-center items-center h-screen bg-gradient-to-tr from-black to-gray-700 mix-blend-overlay relative" style="background-image: linear-gradient(0deg, rgba(7, 5, 1, 0.5), rgba(7, 5, 2, 0.5)), url('/image/login.jpg');">
    <div class="w-96 p-6 shadow-lg bg-gradient-to-r from-yellow-200 to-green-300 rounded-md">
        <h1 class="text-3xl block text-center font-semibold">Login</h1>
        <hr class="mt-3">
        <div class="mt-3">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <label for="email" class="block text-base mb-2">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="mt-3">
            <label for="password" class="block text-base mb-2">{{ __('Password') }}</label>
            <input id="password" type="password" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600 form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mt-3 flex justify-between items-center">
        <div>
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
        <div>
            @if (Route::has('password.request'))
                <a class="text-gray-800 font-semibold" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
        </div>
        <div class="mt-5">
            <button type="submit" class="border-2 border-gray-700 bg-gray-700 text-white py-1 w-full rounded-md hover:bg-transparent hover:text-gray-700 font-semibold">
                {{ __('Login') }}
            </button>
    </div>
</div>
</form>



@endsection
