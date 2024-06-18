<nav class="bg-blueish">
    <div class="max-w-screen-2xl flex flex-wrap items-center justify-between my-auto mx-12 p-4">
        <a href="{{route('seller.dashboard')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{url('assets/menu-icon.png')}}" class="h-6 w-8" alt="Menu Icon" />
        </a>
        <div class="flex items-center md:order-2 space-x-3">
            @guest
            <p class="text-lg text-white-broke font-semibold tracking-wide p-2">
                <a href="{{ route('login') }}">
                    Login
                </a>
                 | 
                <a href="{{ route('register') }}">
                    Register
                </a>
            </p>
            @else
            <a href="{{ route('profile.edit') }}">
            <button type="button" class="flex text-sm focus:ring-2 focus:ring-blueish">
                <span class="sr-only">Open user menu</span>
                <img class="w-10 h-10" src="{{url('/assets/user-icon.png')}}" alt="user photo" />
            </button>
            </a>
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