@extends('layouts.auth')

@section('title')
    <title>Login</title>
@endsection

 
@section('content')
<form method="POST" action="{{ route('login') }}" class="content-center grid mx-24 font-bold mt-24">
    @csrf
        <h1 class="text-blue-old text-3xl text-center mb-4">{{ __('Login') }}</h1>
        <label for="email" class="font-medium">{{ __('Email Address') }}</label>
        <input type="text" name="email" id="email" placeholder="Email Address" required value="{{ old('email') }}" autocomplete="email" class="block mb-4 pl-2.5 w-full text-sm text-blue-old bg-transparent border-0 border-b-2 border-blue-old font-medium appearance-none focus:outline-none focus:ring-0 peer/email" />

        @error('email')
            <p class="mb-2 text-red-500 text-sm font-extralight">
                {{ $message }}
            </p>
        @enderror

        <label for="password" class="font-medium">{{ __('Password') }}</label>
        <input type="password" name="password" id="password" placeholder="Password" required autocomplete="current-password" class="block mb-4 pl-2.5 w-full text-sm text-blue-old bg-transparent border-0 border-b-2 border-blue-old font-medium appearance-none focus:outline-none focus:ring-0 peer/password" />

        @error('password')
            <p class="mb-2 text-red-500 text-sm font-extralight">
                {{ $message }}
            </p>
        @enderror

        <div class="grid grid-cols-2 mb-4">
            <div class="justify-self-center">
                <input id="remember_me" type="checkbox" name="remember_me" value="" class="w-4 h-4 border-2 border-blue-old rounded bg-blue-old peer/remember_me focus:ring-2 focus:ring-blue-300" {{ old('remember_me') ? 'checked' : '' }} />
                <label for="remember_me" class="font-thin text-xs ml-1 peer-checked/remember_me:font-extralight">{{ __('Tetap Masuk')}}</label>
            </div>
            @if (Route::has('password.request'))        
                <a href="{{ route('password.request') }}" class="font-extralight pt-1 text-xs justify-self-center">{{ __('Lupa Passsword?') }}</a>
            @endif
        </div>

        <div>
            <a href="{{route('socialite.redirect', 'google')}}" class="text-white">Login with Google</a>
        </div>
    </form>
</x-guest-layout>
