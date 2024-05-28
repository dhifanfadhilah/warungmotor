@extends('layouts.auth')

@section('title')
<title>Reset Password</title>
@endsection

@section('content')
<div  class="content-center grid mx-24 font-bold mt-36">
    @if (session('status'))
        <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <a href="{{ route('login') }}" class="mb-3">
        <img src="{{url('/assets/blue-back-icon.png')}}" alt="" class="h-6 w-6">
    </a>

    <form action="{{ route('password.email') }}" method="POST">
        @csrf 

        <h1 class="text-blue-old text-3xl text-center mb-4">{{ __('Reset Password') }}</h1>

        <label for="email" class="font-medium">{{ __('Email Address') }}</label>
        <input type="text" name="email" id="email" placeholder="Email Address" required value="{{ old('email') }}" autocomplete="email" class="block mb-4 pl-2.5 w-full text-sm text-blue-old bg-transparent border-0 border-b-2 border-blue-old font-medium appearance-none focus:outline-none focus:ring-0 peer/email" />

        @error('email')
            <p class="mt-2 invisible peer-invalid/email:visible text-red-500 text-sm font-extralight">
                {{ $message }}
            </p>
        @enderror

        <button type="submit" class="mb-4 w-auto justify-self-center text-white bg-blue-old hover:bg-blue-950 focus:outline-none focus:ring-2 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">{{ __('Send Password Link') }}</button>
    </form>
</div>
@endsection
