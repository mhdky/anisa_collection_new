    {{-- navigation mobile --}}
    <nav class="bg-white fixed z-40 top-0 w-full flex justify-between items-center px-5 py-4 border-b border-gray-300 md-768:hidden">
        {{-- burger button --}}
        <div class="burger-button w-5 h-4 flex flex-col justify-between relative">
            <span class="span1 w-full h-[3px] rounded-md bg-black-primary block"></span>
            <span class="span2 w-full h-[3px] rounded-md bg-black-primary block"></span>
            <span class="span3 w-full h-[3px] rounded-md bg-black-primary block"></span>
        </div>
        {{-- logo --}}
        <a href="/" class="text-yellow-primary text-2xl font-playfair font-bold">Anisa Collection</a>
        {{-- bag atau sign in --}}
        @auth
            {{-- bag --}}
            <div class="relative">
                <img src="{{ asset('img/bag.png') }}" alt="Bag" class="w-[22px]">
                <div class="bg-red-500 w-4 h-4 rounded-full absolute bottom-4 left-4 flex justify-center items-center text-white text-[0.6rem] font-bold">9+</div>
            </div>
        @else
            {{-- sign in --}}
            <a href="/login" class="text-[0.9rem] font-medium">Sign in</a>
        @endauth
    </nav>

    {{-- list navigation mobile --}}
    <div class="list-mobile bg-white fixed top-0 right-0 left-0 bottom-0 px-5 md-768:hidden">
        {{-- search mobile --}}
        <form action="/" autocomplete="off" class="mt-[90px]">
            <input type="search" name="search" placeholder="Masukan kata kunci pencarian" class="w-full rounded-[5px] bg-gray-100 border border-gray-300 outline-none focus:border-transparent focus:ring-yellow-primary focus:shadow-sm focus:shadow-yellow-primary">
        </form>
        {{-- list navigation --}}
        <ul class="mt-5 font-bold">
            <li class="my-3"><a href="/" class="{{ (Request::is('/') ? 'text-yellow-primary' : 'text-gray-500') }}">Home</a></li>
            <li class="my-3"><a href="/product" class="{{ (Request::is('product') ? 'text-yellow-primary' : 'text-gray-500') }}">Product</a></li>
            <li class="my-3"><a href="/howtoorder" class="{{ (Request::is('howtoorder') ? 'text-yellow-primary' : 'text-gray-500') }}">How To Order</a></li>
            <li class="my-3"><a href="/aboutus" class="{{ (Request::is('aboutus') ? 'text-yellow-primary' : 'text-gray-500') }}">About Us</a></li>
        </ul>
        {{-- nama pengguna, my profile dan sign out mobile  --}}
        @auth
            <div class="w-full border-t border-gray-300 mt-5">
                {{-- nama pengguna mobile --}}
                <h1 class="text-yellow-primary text-xl font-bold mt-3">{{ Str::limit(Auth::user()->name, 25) }}</h1>
                {{-- my profile mobile --}}
                <a href="/profile" class="text-gray-500 font-bold mt-3 block">My Profile</a>
                {{-- sign out mobile --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-red-500 font-semibold mt-3">Sign out</button>
                </form>
            </div>
        @endauth
    </div>

    {{-- navigation desktop --}}
    @if (Request::is('/'))
    <div class="bg-white hidden justify-center md-768:flex">
    @else
    <div class="bg-white hidden justify-center border border-gray-200 md-768:flex">
    @endif
        <div class="w-full py-4 px-5 flex justify-between items-center lg-1100:w-[1100px]">
            {{-- logo dan list navigation desktop --}}
            <div class="flex items-center">
                {{-- logo desktop --}}
                <a href="/" class="text-yellow-primary text-2xl font-playfair font-bold md-950:text-3xl">Anisa Collection</a>
                {{-- list navigation desktop --}}
                <ul class="flex ml-5 mt-1 md-950:ml-9">
                    <li class="search-desktop mr-3 relative">
                        {{-- search desktop --}}
                        <i class="icon-search fas fa-search text-[0.75rem] cursor-pointer hover:text-yellow-primary"></i>
                        <form action="/" method="get" autocomplete="off" class="form-search-desktop hidden">
                            <div class="bg-yellow-primary w-72 h-10 absolute z-30 top-8 -left-5 rounded-md shadow-md">
                                <div class="relative w-full h-full p-[3px] flex items-center">
                                    <i class="fas fa-sort-up text-yellow-primary absolute -top-[5px] left-[22px]"></i>
                                    <input type="search" name="search" placeholder="Masukan keyword pencarian" id="input-search" class="bg-white text-sm w-full h-full rounded-l-[3px] border border-white outline-none focus:ring-transparent focus:border-transparent">
                                    <button type="submit" class="bg-black-primary h-full rounded-r-[3px] px-4"><i class="fas fa-search text-white text-sm"></i></button>
                                </div>
                            </div>
                        </form>
                    </li>
                    {{-- list navigation desktop --}}
                    <li class="mr-3"><a href="/" class="{{ (Request::is('/') ? 'text-yellow-primary' : '') }} text-[0.9rem] hover:text-yellow-primary md-950:text-sm">Home</a></li>
                    <li class="mr-3"><a href="/product" class="{{ (Request::is('product*') ? 'text-yellow-primary' : '') }} text-[0.9rem] hover:text-yellow-primary md-950:text-sm">Product</a></li>
                    <li class="mr-3"><a href="/howtoorder" class="{{ (Request::is('howtoorder*') ? 'text-yellow-primary' : '') }} text-[0.9rem] hover:text-yellow-primary md-950:text-sm">How to order</a></li>
                    <li class="mr-3"><a href="/aboutus" class="{{ (Request::is('aboutus') ? 'text-yellow-primary' : '') }} text-[0.9rem] hover:text-yellow-primary md-950:text-sm">About us</a></li>
                </ul>
            </div>
            {{-- bag dan nama pengguna --}}
            @auth
                <div class="flex items-center">
                    {{-- bag --}}
                    <div class="relative">
                        <a href="/"><img src="{{ asset('img/bag.png') }}" alt="Bag" class="w-5"></a>
                        {{-- jumlah isi bag --}}
                        <div class="bg-red-500 w-4 h-4 rounded-full absolute bottom-3 left-3 flex justify-center items-center text-white text-[0.7rem] font-bold">9+</div>
                    </div>

                    {{-- nama pengguna --}}
                    <div class="nama-pengguna bg-black-primary w-32 ml-5 py-[5px] px-2 flex justify-between items-center rounded-md relative cursor-pointer md-950:py-2">
                        <p class="text-white text-[0.8rem]">{{ Str::limit(Auth::user()->name, 14) }}</p>
                        <i class="arrow-down fas fa-chevron-down text-white text-[0.7rem] duration-300"></i>

                        {{-- profil dan logout --}}
                        <div class="profile-logout {{ (Request::is('/') ? 'bg-black-primary border border-gray-400' : 'bg-black-primary') }} hidden w-32 h-20 absolute z-40 -bottom-[90px] left-[1px] rounded-md">
                            <div class="relative w-full h-full">
                                <i class="upicon fas fa-sort-up absolute -top-[5px] left-1/2 -translate-x-1/2 {{ (Request::is('/') ? 'text-black-primary' : 'text-black-primary') }}"></i>
                                {{-- profile --}}
                                <a href="/profile" class="myprofile w-full h-1/2 rounded-t-md px-2 flex items-center {{ (Request::is('/') ? 'hover:bg-white-hover' : 'hover:bg-black-hover') }}">
                                    <i class="fas fa-user text-white text-[0.9rem] mr-2"></i>
                                    <p class="text-white text-[0.8rem]">My profile</p>
                                </a>
                                {{-- sign out --}}
                                <form method="POST" action="{{ route('logout') }}" class="w-full h-1/2 rounded-b-md {{ (Request::is('/') ? 'hover:bg-white-hover' : 'hover:bg-black-hover') }}">
                                    @csrf
                                    <button type="submit" class="w-full h-full rounded-b-md flex items-center px-2">
                                        <i class="fas fa-sign-out-alt text-white text-[0.9rem] mr-2"></i>
                                        <p class="text-white text-[0.8rem]">Sign out</p>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- close profil dan logout --}}
                    <div class="close-profile-logout hidden fixed z-30 top-0 right-0 bottom-0 left-0"></div>
                </div>
            @else
                <div class="flex items-center">
                    <a href="/login" class="text-[0.9rem] mr-3">Sign in</a>
                    <a href="/register" class="bg-black-primary px-2 py-1 text-white text-[0.9rem] rounded-md hover:bg-black-hover md-950:px-3 md-950:py-2">Sign up</a>
                </div>
            @endauth
        </div>
    </div>    

    {{-- close form search --}}
    <div class="close-form-search fixed z-[19] top-0 right-0 bottom-0 left-0 hidden"></div>



    {{-- @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Sign In</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Sign Up</a>
            @endif
        @endauth
    </div>
    @endif --}}

    {{-- <a href="loogut" onclick="event.preventDefault(); this.closest('form').submit();">
        logout
    </a> --}}

    {{-- <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="text-red-500 font-semibold mt-3">Sign out</button>
    </form> --}}