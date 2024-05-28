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
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">
                            Profile
                        </a>
                    </li>
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="route('logout')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                Logout
                            </a>
                        </form>
                    </li>
                </ul>
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