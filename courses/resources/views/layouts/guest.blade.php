<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="bg-red-100 body">
            <div class="container mx-auto">
                <!--Header Section-->
                <header class="flex items-center justify-between h-16 shadow-lg">
                    <div class="flex items-center">
                        <a href="/" class="inline-block">
                            <img class="w-56" src="https://laravel-courses.com/img/logo.png?1.0" alt="Logo">
                        </a>
                        <nav class="hidden h-16 space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <a href="" class="inline-flex items-center px-1 pt-1 text-base font-medium leading-5 text-gray-500 transition border-b-2 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">Courses</a>
                            <a href="" class="inline-flex items-center px-1 pt-1 text-base font-medium leading-5 text-gray-500 transition border-b-2 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">Books</a>
                        </nav>
                    </div>

                    <!--Signup&login button-->
                    <div class="flex items-center">
                            {{-- <div class="relative ml-3">
                                <div class="relative">
                                    <div>
                                        <button class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                            <img class="object-cover w-8 h-8 rounded-full" src="" alt="">
                                        </button>
                                    </div>

                                    <div x-show="open" class="absolute right-0 z-50 w-48 mt-2 origin-top-right rounded-md shadow-lg">
                                        <div class="py-1 bg-white rounded-md ring-1 ring-black ring-opacity-5">
                                            <!-- Account Management -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                Manage Account
                                            </div>

                                            <a class="block px-4 py-2 text-sm leading-5 text-gray-700 transition hover:bg-gray-100 focus:outline-none focus:bg-gray-100" href="">Profile</a>
                                            <a class="block px-4 py-2 text-sm leading-5 text-gray-700 transition hover:bg-gray-100 focus:outline-none focus:bg-gray-100" href="#">Submit Course</a>
                                            <a class="block px-4 py-2 text-sm leading-5 text-gray-700 transition hover:bg-gray-100 focus:outline-none focus:bg-gray-100" href="">Dashboard</a>


                                            <div class="border-t border-gray-100"></div>

                                            <!-- Authentication -->
                                            <form method="POST" action="">
                                                <button class="block px-4 py-2 text-sm leading-5 text-gray-700 transition hover:bg-gray-100 focus:outline-none focus:bg-gray-100">Log Out</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        <a href="" class="text-sm font-medium text-gray-500 hover:text-gray-900">Sign in</a>
                        <a href="" class="inline-flex items-center justify-center px-4 py-2 ml-8 text-sm font-medium text-white bg-black border border-transparent rounded shadow-sm hover:bg-red-500">Sign up</a>
                    </div>
                </header>
            </div>
        </div>

                {{ $slot }}
            <!--Forter Section-->
            <footer class="relative w-full py-8 bg-dark">
                <img src="https://laravel-courses.com/img/footer-cure.png" alt="Stylish Design" class="absolute bottom-0 right-0 z-10 object-contain w-auto h-auto pointer-events-none">
                <div class="container flex justify-between py-8 mx-auto">
                    <div>
                        <h2 class="text-white text-lg-primary-2">Course by Series</h2>
                        <ul class="mt-5">
                            <li class="mb-2">
                                <a href="" class="text-base text-gray-100 text-links before:text-gray-100"></a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-white text-lg-primary-2">Course by Duration</h2>
                        <ul class="mt-5">
                            <li class="mb-2">
                                <a href="" class="text-base text-gray-100 text-links before:text-gray-100">1-5 hours</a>
                            </li>
                            <li class="mb-2">
                                <a href="" class="text-base text-gray-100 text-links before:text-gray-100">5-10 hours</a>
                            </li>
                            <li class="mb-2">
                                <a href="" class="text-base text-gray-100 text-links before:text-gray-100">10+ hours</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-white text-lg-primary-2">Course by Level</h2>
                        <ul class="mt-5">
                            <li class="mb-2">
                                <a href="" class="text-base text-gray-100 text-links before:text-gray-100"></a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-white text-lg-primary-2">Course by Platform</h2>
                        <ul class="mt-5">
                            <li class="mb-2">
                                <a href="" class="text-base text-gray-100 text-links before:text-gray-100"></a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-white text-lg-primary-2">Course by Topics</h2>
                        <ul class="mt-5">
                            <li class="mb-2">
                                <a href="" class="text-base text-gray-100 text-links before:text-gray-100"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                    <!--footer bottom -->
                <div class="container flex items-center justify-between gap-5 mx-auto">
                    <ul class="relative items-center inline-block">
                        <li>
                            <a href="#" target="_blank">
                                <svg class="hover:filter hover:brightness-200" xmlns="http://www.w3.org/2000/svg" width="15" height="12" fill="none">
                                    <path fill="#898F92" d="M15 1.412a6.217 6.217 0 0 1-1.764.487 3.043 3.043 0 0 0 1.348-1.68c-.595.353-1.255.6-1.95.741C12.067.353 11.27 0 10.368 0 8.683 0 7.306 1.355 7.306 3.028c0 .24.03.473.08.692A8.79 8.79 0 0 1 1.045.558a2.96 2.96 0 0 0-.415 1.517c0 1.052.538 1.984 1.37 2.513a3.08 3.08 0 0 1-1.399-.353v.021c0 1.469 1.061 2.697 2.467 2.972a3.072 3.072 0 0 1-1.384.05 3.023 3.023 0 0 0 1.09 1.505 3.1 3.1 0 0 0 1.778.598A6.171 6.171 0 0 1 .731 10.68c-.243 0-.487-.014-.731-.042A8.808 8.808 0 0 0 4.718 12c5.65 0 8.755-4.616 8.755-8.619 0-.134 0-.261-.007-.395A6.094 6.094 0 0 0 15 1.412Z"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <p class="text-sm  text-center text-[#E5E5E580]  relative"> Developed by <a href="https://twitter.com/phpfour" target="_blank" class="font-medium hover:underline">Md. Rasedul Islam⚡️</a></p>
                    <span></span>
                </div>
            </footer>
    </body>
</html>
