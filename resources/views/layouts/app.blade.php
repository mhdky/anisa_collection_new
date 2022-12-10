<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts roboto -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        {{-- font playfire display --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
        
        {{-- font --}}
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        {{-- my css --}}
        <style>
            html {
                scroll-behavior: smooth;
            }

            .list-mobile {
                transform: translateY(-100%);
                z-index: -30;
            }

            .profile-logout {
                animation: feed-in 0.5s ;
            }

            @keyframes feed-in {
                0% {
                    opacity: 0;
                    transform: translateY(-10px);
                }

                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .form-search-desktop {
                /* animation: feed-in-two 0.5s ; */
            }

            @keyframes feed-in-two {
                0% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-roboto">
            @include('layouts.navigation')

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-pink-300 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            @include('layouts.footer')

        @auth
            <script>
                const namaPengguna = document.querySelector('.nama-pengguna');
                const profileLogout = document.querySelector('.profile-logout');
                const closeProfileLogout = document.querySelector('.close-profile-logout');
                const arrowDown = document.querySelector('.arrow-down');

                namaPengguna.addEventListener('click', () => {
                    profileLogout.style.display = 'block';
                    closeProfileLogout.style.display = 'block';
                    arrowDown.style.transform = 'rotate(180deg)';
                });
                closeProfileLogout.addEventListener('click', () => {
                    profileLogout.style.display = 'none';
                    closeProfileLogout.style.display = 'none';
                    arrowDown.style.transform = 'rotate(0deg)';
                });

                const myprofile = document.querySelector('.myprofile');
                const upicon = document.querySelector('.upicon');
                myprofile.addEventListener('mouseenter', () => {
                    upicon.style.color = '#424242';
                });
                myprofile.addEventListener('mouseleave', () => {
                    upicon.style.color = '#1E1E1E';
                });
            </script>
        @endauth

        <script src="{{ asset('js/script.js') }}"></script>
        <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
    </body>
</html>
