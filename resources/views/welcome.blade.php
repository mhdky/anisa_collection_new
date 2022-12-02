<x-app-layout>

    <x-slot name="slot">
        {{-- jumbotron --}}
        <div class="bg-black-primary w-full h-[55vw] mt-[65px] flex items-center relative overflow-hidden md-768:w-[95vw] md-768:mx-auto md-768:mt-2 md-768:rounded-xl md-768:h-[47vw] md-930:w-[96vw] md-930:h-[44vw] lg-1100:w-[1060px] lg-1100:h-[480px]">
            {{-- tulisan sebaleh kiri --}}
            <div class="h-full absolute z-10 pl-5 flex flex-col justify-center md-930:pl-14">
                <h1 class="text-white text-[7vw] font-playfair font-bold md-768:text-[6vw] md-930:uppercase md-930:text-[5vw] lg-1100:text-[54px]">Anisa Collection</h1>
                <h2 class="text-yellow-primary text-[6vw] font-playfair font-bold mt-1 mb-2 sm-601:mb-4 md-768:text-[4vw] lg-1100:text-[44px]">Live For Fashion</h2>
                {{-- shop now --}}
                <a href="/product" class="relative w-[15vw] h-[7vw] sm-601:h-[6vw] md-768:h-[5vw] md-930:w-[10vw] md-930:h-[4vw] lg-1100:w-28 lg-1100:h-10">
                    <p class="bg-white w-full h-full text-[2.8vw] font-playfair font-bold rounded-[4px] flex justify-center items-center absolute z-10 cursor-default active:top-[2.3px] active:left-[2.3px] sm-601:active:top-[4px] sm-601:active:left-[4px] md-768:text-lg md-930:text-base md-930:cursor-pointer">Shop now</p>
                    <div class="w-full h-full border border-white rounded-[4px] absolute top-[2.3px] left-[2.3px] sm-601:top-[4px] sm-601:left-[4px]"></div>
                </a>
            </div>
            {{-- image --}}
            <div class="w-[75vw] absolute right-0 bottom-0 sm-601:w-[80vw] sm-601:-right-[10vw] sm-645:w-[75vw] sm-645:right-0 md-768:w-[60vw] md-930:w-[57vw] lg-1100:w-[615px]">
                <img src="{{ asset('img/jumbotron_image-2.png') }}" alt="Jumbotron Image" class="sm-645:w-full">
            </div>
        </div>

        {{-- collection --}}
        <div class="bg-yellow-primary w-full pt-4 pb-5 md-768:bg-white md-768:pb-0 md-768:pt-0 md-768:mt-3 lg-1100:w-[1100px] lg-1100:mx-auto">
            <h1 class="w-max mx-auto mb-3 text-[5vw] text-white font-playfair font-semibold md-768:hidden">Category Collection</h1>
            <div class="w-full flex px-5">
                {{-- men collection --}}
                <div class="w-1/2 mr-2 rounded-md overflow-hidden object-cover md-768:mr-3 md-768:rounded-[10px]"><a href="/collection/men"><img src="{{ asset('img/men_collection.png') }}" alt="Men Collection" class="w-full hover:opacity-90 cursor-default md-930:cursor-pointer"></a></div>
                {{-- women collection --}}
                <div class="w-1/2 rounded-md overflow-hidden object-cover md-768:rounded-[10px]"><a href="/collection/women"><img src="{{ asset('img/women_collection.png') }}" alt="Women Collection" class="w-full hover:opacity-90 cursor-default md-930:cursor-pointer"></a></div>
            </div>
        </div>

        {{-- name section dan card product --}}
        <div class="w-full mt-7 lg-1100:w-[1100px] lg-1100:mx-auto md-768:mt-11">
            {{-- name section --}}
            <div class="flex justify-between items-center px-5">
                <h1 class="text-lg font-playfair font-bold md-768:text-2xl">New Collection</h1>
                <a href="/product" class="text-yellow-primary text-sm font-bold md-768:text-lg">See more</a>
            </div>

            {{-- card product --}}
            <div class="flex flex-wrap justify-center mt-3">
                <div class="bg-black-primary w-[42.5vw] m-1 p-2 rounded-[10px] sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3">
                    {{-- image card --}}
                    <div class="w-full h-[40vw] rounded-[10px] overflow-hidden sm-350:h-[41vw] sm-400:h-[42.5vw] sm-440:h-[43.5vw] sm-500:h-[30vw] md-890:h-[22vw] lg-1100:h-[260px] lg-1130:h-[240px]">
                        <img src="{{ asset('img/product-1.jpg') }}" alt="Product" class="w-full h-full object-cover">
                    </div>

                    {{-- harga --}}
                    <p class="text-yellow-primary text-[0.7rem] font-bold mt-1 sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-2">Rp. 1.300.000</p>

                    {{-- nama product --}}
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit('Artka 2019 Fall Coat Jacket Winter Selected Femme Kat Embroidered Knitted', 17) }}</h1>
                    
                    {{-- button order --}}
                    <a href="/" class="bg-slate-primary w-full mt-1 py-1 text-white text-[0.7rem] text-center font-bold rounded-[10px] block sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-3 lg-1100:py-2">Shop now</a>
                </div>

                <div class="bg-black-primary w-[42.5vw] m-1 p-2 rounded-[10px] sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3">
                    {{-- image card --}}
                    <div class="w-full h-[40vw] rounded-[10px] overflow-hidden sm-350:h-[41vw] sm-400:h-[42.5vw] sm-440:h-[43.5vw] sm-500:h-[30vw] md-890:h-[22vw] lg-1100:h-[260px] lg-1130:h-[240px]">
                        <img src="{{ asset('img/product-1.jpg') }}" alt="Product" class="w-full h-full object-cover">
                    </div>

                    {{-- harga --}}
                    <p class="text-yellow-primary text-[0.7rem] font-bold mt-1 sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-2">Rp. 1.300.000</p>

                    {{-- nama product --}}
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit('Artka 2019 Fall Coat Jacket Winter Selected Femme Kat Embroidered Knitted', 17) }}</h1>
                    
                    {{-- button order --}}
                    <a href="/" class="bg-slate-primary w-full mt-1 py-1 text-white text-[0.7rem] text-center font-bold rounded-[10px] block sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-3 lg-1100:py-2">Shop now</a>
                </div>

                <div class="bg-black-primary w-[42.5vw] m-1 p-2 rounded-[10px] sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3">
                    {{-- image card --}}
                    <div class="w-full h-[40vw] rounded-[10px] overflow-hidden sm-350:h-[41vw] sm-400:h-[42.5vw] sm-440:h-[43.5vw] sm-500:h-[30vw] md-890:h-[22vw] lg-1100:h-[260px] lg-1130:h-[240px]">
                        <img src="{{ asset('img/product-1.jpg') }}" alt="Product" class="w-full h-full object-cover">
                    </div>

                    {{-- harga --}}
                    <p class="text-yellow-primary text-[0.7rem] font-bold mt-1 sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-2">Rp. 1.300.000</p>

                    {{-- nama product --}}
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit('Artka 2019 Fall Coat Jacket Winter Selected Femme Kat Embroidered Knitted', 17) }}</h1>
                    
                    {{-- button order --}}
                    <a href="/" class="bg-slate-primary w-full mt-1 py-1 text-white text-[0.7rem] text-center font-bold rounded-[10px] block sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-3 lg-1100:py-2">Shop now</a>
                </div>

                <div class="bg-black-primary w-[42.5vw] m-1 p-2 rounded-[10px] sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3">
                    {{-- image card --}}
                    <div class="w-full h-[40vw] rounded-[10px] overflow-hidden sm-350:h-[41vw] sm-400:h-[42.5vw] sm-440:h-[43.5vw] sm-500:h-[30vw] md-890:h-[22vw] lg-1100:h-[260px] lg-1130:h-[240px]">
                        <img src="{{ asset('img/product-1.jpg') }}" alt="Product" class="w-full h-full object-cover">
                    </div>

                    {{-- harga --}}
                    <p class="text-yellow-primary text-[0.7rem] font-bold mt-1 sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-2">Rp. 1.300.000</p>

                    {{-- nama product --}}
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit('Artka 2019 Fall Coat Jacket Winter Selected Femme Kat Embroidered Knitted', 17) }}</h1>
                    
                    {{-- button order --}}
                    <a href="/" class="bg-slate-primary w-full mt-1 py-1 text-white text-[0.7rem] text-center font-bold rounded-[10px] block sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-3 lg-1100:py-2">Shop now</a>
                </div>
                <div class="bg-black-primary w-[42.5vw] m-1 p-2 rounded-[10px] sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3">
                    {{-- image card --}}
                    <div class="w-full h-[40vw] rounded-[10px] overflow-hidden sm-350:h-[41vw] sm-400:h-[42.5vw] sm-440:h-[43.5vw] sm-500:h-[30vw] md-890:h-[22vw] lg-1100:h-[260px] lg-1130:h-[240px]">
                        <img src="{{ asset('img/product-1.jpg') }}" alt="Product" class="w-full h-full object-cover">
                    </div>

                    {{-- harga --}}
                    <p class="text-yellow-primary text-[0.7rem] font-bold mt-1 sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-2">Rp. 1.300.000</p>

                    {{-- nama product --}}
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit('Artka 2019 Fall Coat Jacket Winter Selected Femme Kat Embroidered Knitted', 17) }}</h1>
                    
                    {{-- button order --}}
                    <a href="/" class="bg-slate-primary w-full mt-1 py-1 text-white text-[0.7rem] text-center font-bold rounded-[10px] block sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-3 lg-1100:py-2">Shop now</a>
                </div>

                <div class="bg-black-primary w-[42.5vw] m-1 p-2 rounded-[10px] sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3">
                    {{-- image card --}}
                    <div class="w-full h-[40vw] rounded-[10px] overflow-hidden sm-350:h-[41vw] sm-400:h-[42.5vw] sm-440:h-[43.5vw] sm-500:h-[30vw] md-890:h-[22vw] lg-1100:h-[260px] lg-1130:h-[240px]">
                        <img src="{{ asset('img/product-1.jpg') }}" alt="Product" class="w-full h-full object-cover">
                    </div>

                    {{-- harga --}}
                    <p class="text-yellow-primary text-[0.7rem] font-bold mt-1 sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-2">Rp. 1.300.000</p>

                    {{-- nama product --}}
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit('Artka 2019 Fall Coat Jacket Winter Selected Femme Kat Embroidered Knitted', 17) }}</h1>
                    
                    {{-- button order --}}
                    <a href="/" class="bg-slate-primary w-full mt-1 py-1 text-white text-[0.7rem] text-center font-bold rounded-[10px] block sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-3 lg-1100:py-2">Shop now</a>
                </div>

                <div class="bg-black-primary w-[42.5vw] m-1 p-2 rounded-[10px] sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3">
                    {{-- image card --}}
                    <div class="w-full h-[40vw] rounded-[10px] overflow-hidden sm-350:h-[41vw] sm-400:h-[42.5vw] sm-440:h-[43.5vw] sm-500:h-[30vw] md-890:h-[22vw] lg-1100:h-[260px] lg-1130:h-[240px]">
                        <img src="{{ asset('img/product-1.jpg') }}" alt="Product" class="w-full h-full object-cover">
                    </div>

                    {{-- harga --}}
                    <p class="text-yellow-primary text-[0.7rem] font-bold mt-1 sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-2">Rp. 1.300.000</p>

                    {{-- nama product --}}
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit('Artka 2019 Fall Coat Jacket Winter Selected Femme Kat Embroidered Knitted', 17) }}</h1>
                    
                    {{-- button order --}}
                    <a href="/" class="bg-slate-primary w-full mt-1 py-1 text-white text-[0.7rem] text-center font-bold rounded-[10px] block sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-3 lg-1100:py-2">Shop now</a>
                </div>
                <div class="bg-black-primary w-[42.5vw] m-1 p-2 rounded-[10px] sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3">
                    {{-- image card --}}
                    <div class="w-full h-[40vw] rounded-[10px] overflow-hidden sm-350:h-[41vw] sm-400:h-[42.5vw] sm-440:h-[43.5vw] sm-500:h-[30vw] md-890:h-[22vw] lg-1100:h-[260px] lg-1130:h-[240px]">
                        <img src="{{ asset('img/product-1.jpg') }}" alt="Product" class="w-full h-full object-cover">
                    </div>

                    {{-- harga --}}
                    <p class="text-yellow-primary text-[0.7rem] font-bold mt-1 sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-2">Rp. 1.300.000</p>

                    {{-- nama product --}}
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit('Artka 2019 Fall Coat Jacket Winter Selected Femme Kat Embroidered Knitted', 17) }}</h1>
                    
                    {{-- button order --}}
                    <a href="/" class="bg-slate-primary w-full mt-1 py-1 text-white text-[0.7rem] text-center font-bold rounded-[10px] block sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-3 lg-1100:py-2">Shop now</a>
                </div>

                <div class="bg-black-primary w-[42.5vw] m-1 p-2 rounded-[10px] sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3">
                    {{-- image card --}}
                    <div class="w-full h-[40vw] rounded-[10px] overflow-hidden sm-350:h-[41vw] sm-400:h-[42.5vw] sm-440:h-[43.5vw] sm-500:h-[30vw] md-890:h-[22vw] lg-1100:h-[260px] lg-1130:h-[240px]">
                        <img src="{{ asset('img/product-1.jpg') }}" alt="Product" class="w-full h-full object-cover">
                    </div>

                    {{-- harga --}}
                    <p class="text-yellow-primary text-[0.7rem] font-bold mt-1 sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-2">Rp. 1.300.000</p>

                    {{-- nama product --}}
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit('Artka 2019 Fall Coat Jacket Winter Selected Femme Kat Embroidered Knitted', 17) }}</h1>
                    
                    {{-- button order --}}
                    <a href="/" class="bg-slate-primary w-full mt-1 py-1 text-white text-[0.7rem] text-center font-bold rounded-[10px] block sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-3 lg-1100:py-2">Shop now</a>
                </div>

                <div class="bg-black-primary w-[42.5vw] m-1 p-2 rounded-[10px] sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3">
                    {{-- image card --}}
                    <div class="w-full h-[40vw] rounded-[10px] overflow-hidden sm-350:h-[41vw] sm-400:h-[42.5vw] sm-440:h-[43.5vw] sm-500:h-[30vw] md-890:h-[22vw] lg-1100:h-[260px] lg-1130:h-[240px]">
                        <img src="{{ asset('img/product-1.jpg') }}" alt="Product" class="w-full h-full object-cover">
                    </div>

                    {{-- harga --}}
                    <p class="text-yellow-primary text-[0.7rem] font-bold mt-1 sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-2">Rp. 1.300.000</p>

                    {{-- nama product --}}
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit('Artka 2019 Fall Coat Jacket Winter Selected Femme Kat Embroidered Knitted', 17) }}</h1>
                    
                    {{-- button order --}}
                    <a href="/" class="bg-slate-primary w-full mt-1 py-1 text-white text-[0.7rem] text-center font-bold rounded-[10px] block sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-3 lg-1100:py-2">Shop now</a>
                </div>
                <div class="bg-black-primary w-[42.5vw] m-1 p-2 rounded-[10px] sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3">
                    {{-- image card --}}
                    <div class="w-full h-[40vw] rounded-[10px] overflow-hidden sm-350:h-[41vw] sm-400:h-[42.5vw] sm-440:h-[43.5vw] sm-500:h-[30vw] md-890:h-[22vw] lg-1100:h-[260px] lg-1130:h-[240px]">
                        <img src="{{ asset('img/product-1.jpg') }}" alt="Product" class="w-full h-full object-cover">
                    </div>

                    {{-- harga --}}
                    <p class="text-yellow-primary text-[0.7rem] font-bold mt-1 sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-2">Rp. 1.300.000</p>

                    {{-- nama product --}}
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit('Artka 2019 Fall Coat Jacket Winter Selected Femme Kat Embroidered Knitted', 17) }}</h1>
                    
                    {{-- button order --}}
                    <a href="/" class="bg-slate-primary w-full mt-1 py-1 text-white text-[0.7rem] text-center font-bold rounded-[10px] block sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-3 lg-1100:py-2">Shop now</a>
                </div>

                <div class="bg-black-primary w-[42.5vw] m-1 p-2 rounded-[10px] sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3">
                    {{-- image card --}}
                    <div class="w-full h-[40vw] rounded-[10px] overflow-hidden sm-350:h-[41vw] sm-400:h-[42.5vw] sm-440:h-[43.5vw] sm-500:h-[30vw] md-890:h-[22vw] lg-1100:h-[260px] lg-1130:h-[240px]">
                        <img src="{{ asset('img/product-1.jpg') }}" alt="Product" class="w-full h-full object-cover">
                    </div>

                    {{-- harga --}}
                    <p class="text-yellow-primary text-[0.7rem] font-bold mt-1 sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-2">Rp. 1.300.000</p>

                    {{-- nama product --}}
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit('Artka 2019 Fall Coat Jacket Winter Selected Femme Kat Embroidered Knitted', 17) }}</h1>
                    
                    {{-- button order --}}
                    <a href="/" class="bg-slate-primary w-full mt-1 py-1 text-white text-[0.7rem] text-center font-bold rounded-[10px] block sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-3 lg-1100:py-2">Shop now</a>
                </div>

                <div class="bg-black-primary w-[42.5vw] m-1 p-2 rounded-[10px] sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3">
                    {{-- image card --}}
                    <div class="w-full h-[40vw] rounded-[10px] overflow-hidden sm-350:h-[41vw] sm-400:h-[42.5vw] sm-440:h-[43.5vw] sm-500:h-[30vw] md-890:h-[22vw] lg-1100:h-[260px] lg-1130:h-[240px]">
                        <img src="{{ asset('img/product-1.jpg') }}" alt="Product" class="w-full h-full object-cover">
                    </div>

                    {{-- harga --}}
                    <p class="text-yellow-primary text-[0.7rem] font-bold mt-1 sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-2">Rp. 1.300.000</p>

                    {{-- nama product --}}
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit('Artka 2019 Fall Coat Jacket Winter Selected Femme Kat Embroidered Knitted', 17) }}</h1>
                    
                    {{-- button order --}}
                    <a href="/" class="bg-slate-primary w-full mt-1 py-1 text-white text-[0.7rem] text-center font-bold rounded-[10px] block sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-3 lg-1100:py-2">Shop now</a>
                </div>

                {{-- manipulate --}}
                <div class="w-[42.5vw] h-[1px] m-1 p-2 sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3"></div>
                <div class="w-[42.5vw] h-[1px] m-1 p-2 sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3"></div>
                <div class="w-[42.5vw] h-[1px] m-1 p-2 sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3"></div>
            </div>
        </div>

        <div class="w-full h-screen"></div>
    </x-slot>

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


</x-app-layout>