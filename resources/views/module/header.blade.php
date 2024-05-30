<nav class="bg-blueish">
    <div class="max-w-screen-2xl flex flex-wrap items-center justify-between my-auto mx-12 p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{url('assets/menu-icon.png')}}" class="h-6 w-8" alt="Menu Icon" />
        </a>
        <div class="flex items-center md:order-2 space-x-3">
            <button type="button" class="flex text-sm focus:ring-2 focus:ring-blueish" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-10 h-10" src="{{url('/assets/user-icon.png')}}" alt="user photo" />
            </button>

            @guest
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 shadow w-32" id="user-dropdown">
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">
                            Login
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">
                            Register
                        </a>
                    </li>
                </ul>
            </div>
            @else
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 shadow w-32" id="user-dropdown">
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">
                            Profile
                        </a>
                    </li>
                    <li>
                        <!-- <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100" data-modal-target="popup-modal" data-modal-toggle="popup-modal">
                            Logout
                        </a> -->
                        <button type="button" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-blue-100" data-modal-target="popup-modal" data-modal-toggle="popup-modal">
                            Logout
                        </button>

                    </li>
                </ul>
            </div>
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
            @endguest

        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <a href="{{ url('/') }}">
                    <h1 class="block py-2 px-3 text-white-broke text-2xl font-bold">
                        MOTORBAGUS
                    </h1>
                </a>
            </ul>
        </div>
    </div>
</nav>