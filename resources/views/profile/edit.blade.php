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
        <button type="submit" class="flex items-center p-4 w-full mt-10 text-lg font-medium text-red-500 hover:bg-red-200" data-modal-target="popup-modal" data-modal-toggle="popup-modal">
            <img src="{{url('/assets/logout-icon.png')}}" alt="" class="w-8 mr-4" />
            Log Out
        </button>
        <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah Anda yakin ingin keluar?</h3>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Ya, saya yakin
                            </button>
                        </form>

                        <button data-modal-hide="popup-modal" type="button" class="mt-2 py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Batalkan</button>
                    </div>
                </div>
            </div>
        </div>
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