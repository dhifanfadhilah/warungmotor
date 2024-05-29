@extends('layouts.auth')

@section('title')
    <title>Register</title>
@endsection

@section('content')
<form action="{{ route('register') }}" method="POST" class="content-center grid mx-24 font-bold mt-10">
    @csrf
        <h1 class="text-blue-old text-3xl text-center mb-4">{{ __('REGISTER') }}</h1>
        <label for="name" class="font-medium">{{ __('Name') }}</label>
        <input type="text" name="name" id="name" placeholder="Name" required autocomplete="name" autofocus class="block mb-4 pl-2.5 w-full text-sm text-blue-old bg-transparent border-0 border-b-2 border-blue-old font-medium appearance-none focus:outline-none focus:ring-0 peer/name" />

        @error('name')
            <p class="mb-2 text-red-500 text-sm font-extralight">
                {{ $message }}
            </p>
        @enderror


        <label for="email" class="font-medium">{{ __('Email Address') }}</label>
        <input type="text" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email" class="block mb-4 pl-2.5 w-full text-sm text-blue-old bg-transparent border-0 border-b-2 border-blue-old font-medium appearance-none focus:outline-none focus:ring-0 peer/email" />
    
        @error('email')
            <p class="mb-2 text-red-500 text-sm font-extralight">
                {{ $message }}
            </p>
        @enderror

        <label for="password" class="font-medium">{{ __('Password') }}</label>
        <input type="password" name="password" id="password" placeholder="Password" required class="block mb-4 pl-2.5 w-full text-sm text-blue-old bg-transparent border-0 border-b-2 border-blue-old font-medium appearance-none focus:outline-none focus:ring-0 peer/password" />

        @error('password')
            <p class="mb-2 text-red-500 text-sm font-extralight">
                {{ $message }}
            </p>
        @enderror

        <label for="password_confirmation" class="font-medium">{{ __('Confirm Password') }}</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required class="block mb-4 pl-2.5 w-full text-sm text-blue-old bg-transparent border-0 border-b-2 border-blue-old font-medium appearance-none focus:outline-none focus:ring-0" />

        

        <button type="submit" class="mb-4 w-32 justify-self-center text-white bg-blue-old hover:bg-blue-950 focus:outline-none focus:ring-2 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">{{ __('REGISTER') }}</button>
        <p class="font-medium text-xs justify-self-center">
            Sudah punya akun? <span><a href="{{ route('login') }}" class="text-red-700">{{ __('Login') }}</a></span>
        </p>
</form>
@endsection
