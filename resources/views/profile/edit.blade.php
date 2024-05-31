@extends('layouts.ecommerce')

@section('title')
<title>Profile</title>
@endsection

@section('content')
<div class="w-full px-56 my-12 flex flex-row flex-wrap">
    <div class="relative w-1/4">
        <h1 class="text-2xl font-bold text-center mb-6">User Profile</h1>
        <ul class="flex flex-col text-lg font-medium" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist" data-tabs-active-classes="border-r-4 border-red-500 bg-gray-300">
            <li class="me-2" role="presentation">
                <button class="flex items-center  p-4 w-full hover:bg-gray-300 focus:border-r-4 focus:border-red-500 focus:bg-gray-300" autoFocus id="user-info-tab" data-tabs-target="#userinfo" type="button" role="tab" aria-controls="userinfo" aria-selected="false">
                    <img src="{{url('/assets/profile-icon.png')}}" alt="" class="w-8 mr-4" />
                    User Info
                </button>
            </li>
            <li class="me-2" role="presentation">
                <button class="flex items-center p-4 w-full hover:bg-gray-300 focus:border-r-4 focus:border-red-500 focus:bg-gray-300" id="favorite-tab" data-tabs-target="#favorite" type="button" role="tab" aria-controls="favorite" aria-selected="false">
                    <img src="{{url('/assets/favorite-icon.png')}}" alt="" class="w-8 mr-4" />
                    Favorite
                </button>
            </li>
            <li class="me-2" role="presentation">
                <button class="flex items-center p-4 w-full hover:bg-gray-300 focus:border-r-4 focus:border-red-500 focus:bg-gray-300" id="watchlist-tab" data-tabs-target="#watchlist" type="button" role="tab" aria-controls="watchlist" aria-selected="false">
                    <img src="{{url('/assets/watchlist-icon.png')}}" alt="" class="w-8 mr-4" />
                    Watchlist
                </button>
            </li>
            <li class="me-2" role="presentation">
                <button class="flex items-center p-4 w-full hover:bg-gray-300 focus:border-r-4 focus:border-red-500 focus:bg-gray-300" id="setting-tab" data-tabs-target="#setting" type="button" role="tab" aria-controls="setting" aria-selected="false">
                    <img src="{{url('/assets/setting-icon.png')}}" alt="" class="w-8 mr-4" />
                    Setting
                </button>
            </li>
            <li class="me-2" role="presentation">
                <button class="flex items-center p-4 w-full hover:bg-gray-300 focus:border-r-4 focus:border-red-500 focus:bg-gray-300" id="history-tab" data-tabs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="false">
                    <img src="{{url('/assets/history-icon.png')}}" alt="" class="w-8 mr-4" />
                    History
                </button>
            </li>
        </ul>
        <form action="{{ route('logout') }}" method="POST">
            <button type="submit" class="flex items-center p-4 w-full mt-10 text-lg font-medium text-red-500 hover:bg-red-200">
                <img src="{{url('/assets/logout-icon.png')}}" alt="" class="w-8 mr-4" />
                Log Out
            </button>
        </form>

    </div>
    <div class="w-4/6" id="default-tab-content">
        <div class="hidden px-24" id="userinfo" role="tabpanel" aria-labelledby="userinfo-tab">
            @include('profile.user_info')
        </div>
        <div class="hidden px-16" id="favorite" role="tabpanel" aria-labelledby="favorite-tab">
            favorite
        </div>
        <div class="hidden px-16" id="watchlist" role="tabpanel" aria-labelledby="watchlist-tab">
            watchlist
        </div>
        <div class="hidden px-16" id="setting" role="tabpanel" aria-labelledby="setting-tab">
            setting
        </div>
        <div class="hidden px-16" id="history" role="tabpanel" aria-labelledby="history-tab">
            history
        </div>
    </div>
</div>
@endsection