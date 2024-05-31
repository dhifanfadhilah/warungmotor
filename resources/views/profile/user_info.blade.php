<form action="{{ route('profile.update') }}" method="POSt">
    @csrf
    @method('patch')
    <div class="flex items-center gap-6">
        <div class="hover:bg-gray-200 rounded-full">
            <label for="profileimg" class="relative">
                <img src="{{url('/assets/user-icon.png')}}" alt="Photo Profile" class="w-24 rounded-full border-2" />
                <img src="{{url('/assets/add-icon.png')}}" alt="" class="absolute w-6 h-6 top-14 start-20 rounded-full border-2" />

            </label>
            <input type="file" id="profileimg" name="profileimg" class="hidden" />
        </div>
        <div class="">
            <h1 class="text-xl font-medium">Nama Pengguna</h1>
            <h2 class="text-base">Bandung, Jawa Barat</h2>
        </div>
    </div>
    <div class="mt-5">
        <label for="name" class="mb-2 block text-sm font-medium">Nama Lengkap</label>
        <input type="text" id="name" name="name" autocomplete="name" class="w-full text-sm font-medium p-2 rounded-lg bg-gray-100 border border-gray-200 focus:border-gray-blueish" />
    </div>
    <div class="mt-5">
        <label for="email" class="mb-2 block text-sm font-medium">Email</label>
        <input type="text" id="email" name="email" autocomplete="email" class="w-full text-sm font-medium p-2 rounded-lg bg-gray-100 border border-gray-200 focus:border-gray-blueish" />

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
        <div>
            <p class="text-sm mt-2 text-gray-800">
                Your email address is unverified.

            <form action="{{ route('verification.send') }}" method="POST">
            @csrf
                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Click here to send the verification email.
                </button>
            </form>

            </p>

            @if (session('status') === 'verification-link-sent')
            <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                {{ __('A new verification link has been sent to your email address.') }}
            </p>
            @endif

        </div>
        @endif
    </div>
    <div class="mt-5">
        <label for="notelp" class="mb-2 block text-sm font-medium">No. Telepon</label>
        <input type="text" id="notelp" name="notelp" autocomplete="notelp" class="w-full text-sm font-medium p-2 rounded-lg bg-gray-100 border border-gray-200 focus:border-gray-blueish" />
    </div>
    <div class="mt-5">
        <label for="lokasi" class="mb-2 block text-sm font-medium">Lokasi</label>
        <input type="text" id="lokasi" name="lokasi" autocomplete="lokasi" class="w-full text-sm font-medium p-2 rounded-lg bg-gray-100 border border-gray-200 focus:border-gray-blueish" />
    </div>
    <button type="submit" class="my-4 w-32 text-white shadow bg-blue-old hover:bg-blue-950 focus:outline-none focus:ring-2 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Save</button>

    @if (session('status') === 'profile-updated')
    <div id="alert-1" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
        <div class="ms-3 text-sm font-medium">
            Profil sukses diperbarui.
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
    @endif
</form>