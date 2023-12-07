<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <title>Laravel</title> --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <!-- {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}} -->
    <script async src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- {{-- Daisy UI --}} -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.2.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Alpine Js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

        .radio input ~ label {
          background-color: rgb(233, 225, 225);
          color: rgb(158, 146, 146);
        }
        .radio input:checked ~ label {
          /* background-color: rgb(70, 230, 22); */
          color: white;
          border: 3px solid rgb(158, 146, 146);

        }

    </style>
</head>
<body>
    <!-- Header -->
    <div class="flex flex-wrap place-items-center fixed w-full z-10">
        <!-- navbar -->
        <div class="bg-[#755252] w-full">
            <div>
                <div class="relative">
                    <!-- For md screen size -->
                    <div id="md-searchbar" class="bg-white dark:bg-[#755252] hidden lg:hidden py-5 px-6 items-center justify-between">
                        <div class="flex items-center space-x-3 text-gray-800 dark:text-white">
                            <div>
                               <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2.svg" alt="search">
                               <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2dark.svg" alt="search">
                            </div>
                            <input type="text" placeholder="Search for products" class="text-sm leading-none dark:text-gray-300 dark:bg-[#755252] text-gray-600 focus:outline-none" />
                        </div>
                        <div class="space-x-6">
                            <button aria-label="view favourites" class="text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                                <img class="w-5 dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg3.svg" alt="favourites">
                                <img class="w-5 dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg3dark.svg" alt="favourites">
                            </button>
                            <button aria-label="go to cart" class="text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                                <img class="w-5 dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4.svg" alt="bag">
                                <img class="w-5 dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4dark.svg" alt="bag">
                            </button>
                        </div>
                    </div>
                    <!-- For md screen size -->

                    <!-- For large screens -->
                    <div class="dark:bg-[#755252] bg-gray-50 px-4 py-3">
                        <div class="container mx-auto flex items-center justify-between">
                            <h1 class="cursor-pointer mt-2">
                                <img class="-my-10 h-36 w-56" src="logo.png" alt="logo">
                            </h1>
                            <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Home</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Category</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Collection</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Support</a>
                                </li>
                            </ul>

                            <div class="md:w-2/12 justify-end flex items-center space-x-4 xl:space-x-8">
                                <div class="hidden lg:flex items-center">
                                    <button onclick="toggleSearch()" aria-label="search items" class="w-5 text-gray-800 dark:hover:text-gray-300 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                                        <img class="transform rotate-90 dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2.svg" alt="search">
                                        <img class="transform rotate-90 dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2dark.svg" alt="search">
                                    </button>
                                    <input id="searchInput" type="text" placeholder="search" class="hidden text-sm dark:bg-[#755252] dark:placeholder-gray-300 text-white rounded ml-1 border border-transparent focus:outline-none focus:border-gray-400 px-1" />
                                </div>
                                <div class="hidden lg:flex items-center space-x-4 xl:space-x-8">
                                    <button aria-label="view favourites" class="w-6 text-gray-800 dark:hover:text-gray-300 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                                        <img class=" dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg3.svg" alt="favourites">
                                        <img class=" dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg3dark.svg" alt="favourites">
                                    </button>
                                    <button aria-label="go to cart" class="w-6 text-gray-800 dark:hover:text-gray-300 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                                        <img class=" dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4.svg" alt="bag">
                                        <img class=" dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4dark.svg" alt="bag">
                                    </button>
                                </div>

                                <div class="flex lg:hidden">
                                    <button aria-label="show options" onclick="mdOptionsToggle()" class="text-black dark:text-white dark:hover:text-gray-300 hidden md:flex focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                                        <img class=" dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5.svg" alt="toggler">
                                        <img class=" dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5dark.svg" alt="toggler">
                                    </button>

                                    <button aria-label="open menu" onclick="openMenu()" class="text-black dark:text-white dark:hover:text-gray-300 md:hidden focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                                        <img class=" dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5.svg" alt="toggler">
                                        <img class=" dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5dark.svg" alt="toggler">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- For small screen -->
                    <div id="mobile-menu" class="hidden absolute dark:bg-[#755252] z-10 inset-0 md:hidden bg-white flex flex-col h-screen w-full">
                        <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700 pb-4 p-4">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2.svg" alt="search">
                                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2dark.svg" alt="search">
                                </div>
                                <input type="text" placeholder="Search for products" class="text-sm dark:bg-[#755252] text-gray-600 placeholder-gray-600 dark:placeholder-gray-300 focus:outline-none" />
                            </div>

                            <button onclick="closeMenu()" aria-label="close menu" class="focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg6.svg" alt="cross">
                                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg6dark.svg" alt="cross">
                            </button>
                        </div>
                        <div class="mt-6 p-4">
                            <ul class="flex flex-col space-y-6">
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                                        Home
                                        <div>
                                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                                        Category
                                        <div>
                                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                                        Collection
                                        <div>
                                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                                        Support
                                        <div>
                                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow">
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="h-full flex items-end">
                            <ul class="flex flex-col space-y-8 bg-gray-50 w-full py-10 p-4 dark:bg-gray-800">
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white text-gray-800 flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">
                                        <div>
                                            <img class="w-5 dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4.svg" alt="bag">
                                            <img class="w-5 dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4dark.svg" alt="bag">
                                        </div>
                                        <p class="text-base">Cart</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white text-gray-800 flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">
                                        <div>
                                            <img class="w-5 dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg3.svg" alt="favourites">
                                            <img class="w-5 dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg3dark.svg" alt="favourites">
                                        </div>
                                        <p class="text-base">Wishlist</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    {{-- Content --}}
    <div class="mx-auto min-h-screen pt-[73px]">
        <div class="mt-12 w-[1480px] mx-auto">
            <div class="p-10 grid grid-cols-4 gap-x-14 gap-y-14">

                <div class="bg-gray-200 border-2 border-white backdrop-filter backdrop-blur-sm shadow-2xl rounded-xl p-5">

                    <div class="flex items-center justify-between text-white mb-5">
                        <h1 class="-ml-10 -mt-36 text-xl font-semibold bg-gray-200  text-gray-600 border-2 border-white shadow-lg rounded-xl px-2 py-1">My Collection 1</h1>

                        {{-- Custom Button --}}
                        <div class="flex flex-col gap-2 -mr-10 -mt-3">
                            <a href="">
                            <button class="w-9 h-9 rounded-full  bg-gray-400 hover:bg-blue-300 ring-gray-100 ring-2 shadow-lg text-black  flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 " aria-label="edit note" role="button">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.3792 0.558914C12.7372 0.201041 13.2226 0 13.7288 0C14.2349 0 14.7204 0.201041 15.0784 0.558914L17.4406 2.92123C17.618 3.09851 17.7586 3.30898 17.8546 3.54064C17.9506 3.77229 18 4.02059 18 4.27134C18 4.52209 17.9506 4.77038 17.8546 5.00204C17.7586 5.23369 17.618 5.44417 17.4406 5.62144L6.08938 16.973L0 18L1.02794 11.9105L12.3792 0.558914ZM12.1606 3.47674L14.5229 5.83906L16.091 4.27086L13.7288 1.90949L12.1606 3.47674ZM13.1723 7.18964L10.811 4.82732L2.80894 12.8296L2.32885 15.6711L5.17024 15.1919L13.1733 7.18868L13.1723 7.18964Z" fill="white"/>
                                </svg>
                            </button>
                            </a>

                            <a href="">
                            <button class="w-9 h-9 rounded-full  bg-gray-400 hover:bg-emerald-300 ring-gray-100 ring-2 shadow-lg text-black  flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 " aria-label="edit note" role="button">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 7.6L11.8 1V4.3C8.2 4.3 1 6.28 1 14.2C1 13.0997 3.16 10.9 11.8 10.9V14.2L19 7.6Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            </a>

                            <a href="">
                            <button class="w-9 h-9 rounded-full  bg-gray-400 hover:bg-red-300 ring-gray-100 ring-2 shadow-lg text-black  flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 " aria-label="edit note" role="button">
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.92 3.6H13.68V2.52C13.68 1.85165 13.4145 1.21068 12.9419 0.738091C12.4693 0.265499 11.8283 0 11.16 0H6.84C6.17165 0 5.53068 0.265499 5.05809 0.738091C4.5855 1.21068 4.32 1.85165 4.32 2.52V3.6H1.08C0.793566 3.6 0.518864 3.71379 0.316325 3.91632C0.113785 4.11886 0 4.39357 0 4.68C0 4.96643 0.113785 5.24114 0.316325 5.44368C0.518864 5.64621 0.793566 5.76 1.08 5.76H1.44V18C1.44 18.4774 1.62964 18.9352 1.96721 19.2728C2.30477 19.6104 2.76261 19.8 3.24 19.8H14.76C15.2374 19.8 15.6952 19.6104 16.0328 19.2728C16.3704 18.9352 16.56 18.4774 16.56 18V5.76H16.92C17.2064 5.76 17.4811 5.64621 17.6837 5.44368C17.8862 5.24114 18 4.96643 18 4.68C18 4.39357 17.8862 4.11886 17.6837 3.91632C17.4811 3.71379 17.2064 3.6 16.92 3.6ZM6.48 2.52C6.48 2.42452 6.51793 2.33295 6.58544 2.26544C6.65295 2.19793 6.74452 2.16 6.84 2.16H11.16C11.2555 2.16 11.347 2.19793 11.4146 2.26544C11.4821 2.33295 11.52 2.42452 11.52 2.52V3.6H6.48V2.52ZM14.4 17.64H3.6V5.76H14.4V17.64ZM7.92 8.64V14.4C7.92 14.6864 7.80622 14.9611 7.60368 15.1637C7.40114 15.3662 7.12643 15.48 6.84 15.48C6.55357 15.48 6.27886 15.3662 6.07632 15.1637C5.87379 14.9611 5.76 14.6864 5.76 14.4V8.64C5.76 8.35357 5.87379 8.07886 6.07632 7.87632C6.27886 7.67378 6.55357 7.56 6.84 7.56C7.12643 7.56 7.40114 7.67378 7.60368 7.87632C7.80622 8.07886 7.92 8.35357 7.92 8.64ZM12.24 8.64V14.4C12.24 14.6864 12.1262 14.9611 11.9237 15.1637C11.7211 15.3662 11.4464 15.48 11.16 15.48C10.8736 15.48 10.5989 15.3662 10.3963 15.1637C10.1938 14.9611 10.08 14.6864 10.08 14.4V8.64C10.08 8.35357 10.1938 8.07886 10.3963 7.87632C10.5989 7.67378 10.8736 7.56 11.16 7.56C11.4464 7.56 11.7211 7.67378 11.9237 7.87632C12.1262 8.07886 12.24 8.35357 12.24 8.64Z" fill="white"/>
                                </svg>
                            </button>
                            </a>

                        </div>

                    </div>

                    <img class="w-[310px] h-[284px] -mt-[110px]" src="Butik/Blazer Motif Batik Tujuh Rupa.png" alt="" src="Butik/Kemeja Cowok Motif Batik Tujuh Rupa.png">
                    {{-- <p class="text-right text-sm pt-4 -mb-3">March 28, 2020</p> --}}
                </div>

                <div class="bg-gray-200 border-2 border-white backdrop-filter backdrop-blur-sm shadow-2xl rounded-xl p-5">

                    <div class="flex items-center justify-between text-white mb-5">
                        <h1 class="-ml-10 -mt-36 text-xl font-semibold bg-gray-200  text-gray-600 border-2 border-white shadow-lg rounded-xl px-2 py-1">My Collection 1</h1>
                        {{-- Custom Button --}}
                        <div class="flex flex-col gap-2 -mr-10 -mt-3">
                            <a href="">
                            <button class="w-9 h-9 rounded-full  bg-gray-400 hover:bg-blue-300 ring-gray-100 ring-2 shadow-lg text-black  flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 " aria-label="edit note" role="button">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.3792 0.558914C12.7372 0.201041 13.2226 0 13.7288 0C14.2349 0 14.7204 0.201041 15.0784 0.558914L17.4406 2.92123C17.618 3.09851 17.7586 3.30898 17.8546 3.54064C17.9506 3.77229 18 4.02059 18 4.27134C18 4.52209 17.9506 4.77038 17.8546 5.00204C17.7586 5.23369 17.618 5.44417 17.4406 5.62144L6.08938 16.973L0 18L1.02794 11.9105L12.3792 0.558914ZM12.1606 3.47674L14.5229 5.83906L16.091 4.27086L13.7288 1.90949L12.1606 3.47674ZM13.1723 7.18964L10.811 4.82732L2.80894 12.8296L2.32885 15.6711L5.17024 15.1919L13.1733 7.18868L13.1723 7.18964Z" fill="white"/>
                                </svg>
                            </button>
                            </a>

                            <a href="">
                            <button class="w-9 h-9 rounded-full  bg-gray-400 hover:bg-emerald-300 ring-gray-100 ring-2 shadow-lg text-black  flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 " aria-label="edit note" role="button">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 7.6L11.8 1V4.3C8.2 4.3 1 6.28 1 14.2C1 13.0997 3.16 10.9 11.8 10.9V14.2L19 7.6Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            </a>

                            <a href="">
                            <button class="w-9 h-9 rounded-full  bg-gray-400 hover:bg-red-300 ring-gray-100 ring-2 shadow-lg text-black  flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 " aria-label="edit note" role="button">
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.92 3.6H13.68V2.52C13.68 1.85165 13.4145 1.21068 12.9419 0.738091C12.4693 0.265499 11.8283 0 11.16 0H6.84C6.17165 0 5.53068 0.265499 5.05809 0.738091C4.5855 1.21068 4.32 1.85165 4.32 2.52V3.6H1.08C0.793566 3.6 0.518864 3.71379 0.316325 3.91632C0.113785 4.11886 0 4.39357 0 4.68C0 4.96643 0.113785 5.24114 0.316325 5.44368C0.518864 5.64621 0.793566 5.76 1.08 5.76H1.44V18C1.44 18.4774 1.62964 18.9352 1.96721 19.2728C2.30477 19.6104 2.76261 19.8 3.24 19.8H14.76C15.2374 19.8 15.6952 19.6104 16.0328 19.2728C16.3704 18.9352 16.56 18.4774 16.56 18V5.76H16.92C17.2064 5.76 17.4811 5.64621 17.6837 5.44368C17.8862 5.24114 18 4.96643 18 4.68C18 4.39357 17.8862 4.11886 17.6837 3.91632C17.4811 3.71379 17.2064 3.6 16.92 3.6ZM6.48 2.52C6.48 2.42452 6.51793 2.33295 6.58544 2.26544C6.65295 2.19793 6.74452 2.16 6.84 2.16H11.16C11.2555 2.16 11.347 2.19793 11.4146 2.26544C11.4821 2.33295 11.52 2.42452 11.52 2.52V3.6H6.48V2.52ZM14.4 17.64H3.6V5.76H14.4V17.64ZM7.92 8.64V14.4C7.92 14.6864 7.80622 14.9611 7.60368 15.1637C7.40114 15.3662 7.12643 15.48 6.84 15.48C6.55357 15.48 6.27886 15.3662 6.07632 15.1637C5.87379 14.9611 5.76 14.6864 5.76 14.4V8.64C5.76 8.35357 5.87379 8.07886 6.07632 7.87632C6.27886 7.67378 6.55357 7.56 6.84 7.56C7.12643 7.56 7.40114 7.67378 7.60368 7.87632C7.80622 8.07886 7.92 8.35357 7.92 8.64ZM12.24 8.64V14.4C12.24 14.6864 12.1262 14.9611 11.9237 15.1637C11.7211 15.3662 11.4464 15.48 11.16 15.48C10.8736 15.48 10.5989 15.3662 10.3963 15.1637C10.1938 14.9611 10.08 14.6864 10.08 14.4V8.64C10.08 8.35357 10.1938 8.07886 10.3963 7.87632C10.5989 7.67378 10.8736 7.56 11.16 7.56C11.4464 7.56 11.7211 7.67378 11.9237 7.87632C12.1262 8.07886 12.24 8.35357 12.24 8.64Z" fill="white"/>
                                </svg>
                            </button>
                            </a>

                        </div>
                    </div>

                    <img class="w-[310px] h-[284px] -mt-[110px]" src="Butik/Kutu Baru Motif Batik Tujuh Rupa.png" alt="" src="Butik/Kemeja Cowok Motif Batik Tujuh Rupa.png">
                    {{-- <p class="text-right text-sm pt-4 -mb-3">March 28, 2020</p> --}}
                </div>

                <div class="bg-gray-200 border-2 border-white backdrop-filter backdrop-blur-sm shadow-2xl rounded-xl p-5">

                    <div class="flex items-center justify-between text-white mb-5">
                        <h1 class="-ml-10 -mt-36 text-xl font-semibold bg-gray-200  text-gray-600 border-2 border-white shadow-lg rounded-xl px-2 py-1">My Collection 1</h1>
                        {{-- Custom Button --}}
                        <div class="flex flex-col gap-2 -mr-10 -mt-3">
                            <a href="">
                            <button class="w-9 h-9 rounded-full  bg-gray-400 hover:bg-blue-300 ring-gray-100 ring-2 shadow-lg text-black  flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 " aria-label="edit note" role="button">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.3792 0.558914C12.7372 0.201041 13.2226 0 13.7288 0C14.2349 0 14.7204 0.201041 15.0784 0.558914L17.4406 2.92123C17.618 3.09851 17.7586 3.30898 17.8546 3.54064C17.9506 3.77229 18 4.02059 18 4.27134C18 4.52209 17.9506 4.77038 17.8546 5.00204C17.7586 5.23369 17.618 5.44417 17.4406 5.62144L6.08938 16.973L0 18L1.02794 11.9105L12.3792 0.558914ZM12.1606 3.47674L14.5229 5.83906L16.091 4.27086L13.7288 1.90949L12.1606 3.47674ZM13.1723 7.18964L10.811 4.82732L2.80894 12.8296L2.32885 15.6711L5.17024 15.1919L13.1733 7.18868L13.1723 7.18964Z" fill="white"/>
                                </svg>
                            </button>
                            </a>

                            <a href="">
                            <button class="w-9 h-9 rounded-full  bg-gray-400 hover:bg-emerald-300 ring-gray-100 ring-2 shadow-lg text-black  flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 " aria-label="edit note" role="button">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 7.6L11.8 1V4.3C8.2 4.3 1 6.28 1 14.2C1 13.0997 3.16 10.9 11.8 10.9V14.2L19 7.6Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            </a>

                            <a href="">
                            <button class="w-9 h-9 rounded-full  bg-gray-400 hover:bg-red-300 ring-gray-100 ring-2 shadow-lg text-black  flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 " aria-label="edit note" role="button">
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.92 3.6H13.68V2.52C13.68 1.85165 13.4145 1.21068 12.9419 0.738091C12.4693 0.265499 11.8283 0 11.16 0H6.84C6.17165 0 5.53068 0.265499 5.05809 0.738091C4.5855 1.21068 4.32 1.85165 4.32 2.52V3.6H1.08C0.793566 3.6 0.518864 3.71379 0.316325 3.91632C0.113785 4.11886 0 4.39357 0 4.68C0 4.96643 0.113785 5.24114 0.316325 5.44368C0.518864 5.64621 0.793566 5.76 1.08 5.76H1.44V18C1.44 18.4774 1.62964 18.9352 1.96721 19.2728C2.30477 19.6104 2.76261 19.8 3.24 19.8H14.76C15.2374 19.8 15.6952 19.6104 16.0328 19.2728C16.3704 18.9352 16.56 18.4774 16.56 18V5.76H16.92C17.2064 5.76 17.4811 5.64621 17.6837 5.44368C17.8862 5.24114 18 4.96643 18 4.68C18 4.39357 17.8862 4.11886 17.6837 3.91632C17.4811 3.71379 17.2064 3.6 16.92 3.6ZM6.48 2.52C6.48 2.42452 6.51793 2.33295 6.58544 2.26544C6.65295 2.19793 6.74452 2.16 6.84 2.16H11.16C11.2555 2.16 11.347 2.19793 11.4146 2.26544C11.4821 2.33295 11.52 2.42452 11.52 2.52V3.6H6.48V2.52ZM14.4 17.64H3.6V5.76H14.4V17.64ZM7.92 8.64V14.4C7.92 14.6864 7.80622 14.9611 7.60368 15.1637C7.40114 15.3662 7.12643 15.48 6.84 15.48C6.55357 15.48 6.27886 15.3662 6.07632 15.1637C5.87379 14.9611 5.76 14.6864 5.76 14.4V8.64C5.76 8.35357 5.87379 8.07886 6.07632 7.87632C6.27886 7.67378 6.55357 7.56 6.84 7.56C7.12643 7.56 7.40114 7.67378 7.60368 7.87632C7.80622 8.07886 7.92 8.35357 7.92 8.64ZM12.24 8.64V14.4C12.24 14.6864 12.1262 14.9611 11.9237 15.1637C11.7211 15.3662 11.4464 15.48 11.16 15.48C10.8736 15.48 10.5989 15.3662 10.3963 15.1637C10.1938 14.9611 10.08 14.6864 10.08 14.4V8.64C10.08 8.35357 10.1938 8.07886 10.3963 7.87632C10.5989 7.67378 10.8736 7.56 11.16 7.56C11.4464 7.56 11.7211 7.67378 11.9237 7.87632C12.1262 8.07886 12.24 8.35357 12.24 8.64Z" fill="white"/>
                                </svg>
                            </button>
                            </a>

                        </div>
                    </div>

                    <img class="w-[310px] h-[284px] -mt-[110px]" src="Butik/Kemeja Cowok Motif Batik Tujuh Rupa.png" alt="" src="Butik/Kemeja Cowok Motif Batik Tujuh Rupa.png">
                    {{-- <p class="text-right text-sm pt-4 -mb-3">March 28, 2020</p> --}}
                </div>

                <div class="bg-gray-200 border-2 border-white backdrop-filter backdrop-blur-sm shadow-2xl rounded-xl p-5">

                    <div class="flex items-center justify-between text-white mb-5">
                        <h1 class="-ml-10 -mt-36 text-xl font-semibold bg-gray-200  text-gray-600 border-2 border-white shadow-lg rounded-xl px-2 py-1">My Collection 1</h1>
                        {{-- Custom Button --}}
                        <div class="flex flex-col gap-2 -mr-10 -mt-3">
                            <a href="">
                            <button class="w-9 h-9 rounded-full  bg-gray-400 hover:bg-blue-300 ring-gray-100 ring-2 shadow-lg text-black  flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 " aria-label="edit note" role="button">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.3792 0.558914C12.7372 0.201041 13.2226 0 13.7288 0C14.2349 0 14.7204 0.201041 15.0784 0.558914L17.4406 2.92123C17.618 3.09851 17.7586 3.30898 17.8546 3.54064C17.9506 3.77229 18 4.02059 18 4.27134C18 4.52209 17.9506 4.77038 17.8546 5.00204C17.7586 5.23369 17.618 5.44417 17.4406 5.62144L6.08938 16.973L0 18L1.02794 11.9105L12.3792 0.558914ZM12.1606 3.47674L14.5229 5.83906L16.091 4.27086L13.7288 1.90949L12.1606 3.47674ZM13.1723 7.18964L10.811 4.82732L2.80894 12.8296L2.32885 15.6711L5.17024 15.1919L13.1733 7.18868L13.1723 7.18964Z" fill="white"/>
                                </svg>
                            </button>
                            </a>

                            <a href="">
                            <button class="w-9 h-9 rounded-full  bg-gray-400 hover:bg-emerald-300 ring-gray-100 ring-2 shadow-lg text-black  flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 " aria-label="edit note" role="button">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 7.6L11.8 1V4.3C8.2 4.3 1 6.28 1 14.2C1 13.0997 3.16 10.9 11.8 10.9V14.2L19 7.6Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            </a>

                            <a href="">
                            <button class="w-9 h-9 rounded-full  bg-gray-400 hover:bg-red-300 ring-gray-100 ring-2 shadow-lg text-black  flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 " aria-label="edit note" role="button">
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.92 3.6H13.68V2.52C13.68 1.85165 13.4145 1.21068 12.9419 0.738091C12.4693 0.265499 11.8283 0 11.16 0H6.84C6.17165 0 5.53068 0.265499 5.05809 0.738091C4.5855 1.21068 4.32 1.85165 4.32 2.52V3.6H1.08C0.793566 3.6 0.518864 3.71379 0.316325 3.91632C0.113785 4.11886 0 4.39357 0 4.68C0 4.96643 0.113785 5.24114 0.316325 5.44368C0.518864 5.64621 0.793566 5.76 1.08 5.76H1.44V18C1.44 18.4774 1.62964 18.9352 1.96721 19.2728C2.30477 19.6104 2.76261 19.8 3.24 19.8H14.76C15.2374 19.8 15.6952 19.6104 16.0328 19.2728C16.3704 18.9352 16.56 18.4774 16.56 18V5.76H16.92C17.2064 5.76 17.4811 5.64621 17.6837 5.44368C17.8862 5.24114 18 4.96643 18 4.68C18 4.39357 17.8862 4.11886 17.6837 3.91632C17.4811 3.71379 17.2064 3.6 16.92 3.6ZM6.48 2.52C6.48 2.42452 6.51793 2.33295 6.58544 2.26544C6.65295 2.19793 6.74452 2.16 6.84 2.16H11.16C11.2555 2.16 11.347 2.19793 11.4146 2.26544C11.4821 2.33295 11.52 2.42452 11.52 2.52V3.6H6.48V2.52ZM14.4 17.64H3.6V5.76H14.4V17.64ZM7.92 8.64V14.4C7.92 14.6864 7.80622 14.9611 7.60368 15.1637C7.40114 15.3662 7.12643 15.48 6.84 15.48C6.55357 15.48 6.27886 15.3662 6.07632 15.1637C5.87379 14.9611 5.76 14.6864 5.76 14.4V8.64C5.76 8.35357 5.87379 8.07886 6.07632 7.87632C6.27886 7.67378 6.55357 7.56 6.84 7.56C7.12643 7.56 7.40114 7.67378 7.60368 7.87632C7.80622 8.07886 7.92 8.35357 7.92 8.64ZM12.24 8.64V14.4C12.24 14.6864 12.1262 14.9611 11.9237 15.1637C11.7211 15.3662 11.4464 15.48 11.16 15.48C10.8736 15.48 10.5989 15.3662 10.3963 15.1637C10.1938 14.9611 10.08 14.6864 10.08 14.4V8.64C10.08 8.35357 10.1938 8.07886 10.3963 7.87632C10.5989 7.67378 10.8736 7.56 11.16 7.56C11.4464 7.56 11.7211 7.67378 11.9237 7.87632C12.1262 8.07886 12.24 8.35357 12.24 8.64Z" fill="white"/>
                                </svg>
                            </button>
                            </a>

                        </div>
                    </div>

                    <img class="w-[310px] h-[284px] -mt-[110px]" src="Butik/Kemeja Cowok Motif Batik Tujuh Rupa.png" alt="" src="Butik/Kemeja Cowok Motif Batik Tujuh Rupa.png">
                    {{-- <p class="text-right text-sm pt-4 -mb-3">March 28, 2020</p> --}}
                </div>

                <div class="bg-gray-200 border-2 border-white backdrop-filter backdrop-blur-sm shadow-2xl rounded-xl p-5">

                    <div class="flex items-center justify-between text-white mb-5">
                        <h1 class="-ml-10 -mt-36 text-xl font-semibold bg-gray-200  text-gray-600 border-2 border-white shadow-lg rounded-xl px-2 py-1">My Collection 1</h1>
                        {{-- Custom Button --}}
                        <div class="flex flex-col gap-2 -mr-10 -mt-3">
                            <a href="">
                            <button class="w-9 h-9 rounded-full  bg-gray-400 hover:bg-blue-300 ring-gray-100 ring-2 shadow-lg text-black  flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 " aria-label="edit note" role="button">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.3792 0.558914C12.7372 0.201041 13.2226 0 13.7288 0C14.2349 0 14.7204 0.201041 15.0784 0.558914L17.4406 2.92123C17.618 3.09851 17.7586 3.30898 17.8546 3.54064C17.9506 3.77229 18 4.02059 18 4.27134C18 4.52209 17.9506 4.77038 17.8546 5.00204C17.7586 5.23369 17.618 5.44417 17.4406 5.62144L6.08938 16.973L0 18L1.02794 11.9105L12.3792 0.558914ZM12.1606 3.47674L14.5229 5.83906L16.091 4.27086L13.7288 1.90949L12.1606 3.47674ZM13.1723 7.18964L10.811 4.82732L2.80894 12.8296L2.32885 15.6711L5.17024 15.1919L13.1733 7.18868L13.1723 7.18964Z" fill="white"/>
                                </svg>
                            </button>
                            </a>

                            <a href="">
                            <button class="w-9 h-9 rounded-full  bg-gray-400 hover:bg-emerald-300 ring-gray-100 ring-2 shadow-lg text-black  flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 " aria-label="edit note" role="button">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 7.6L11.8 1V4.3C8.2 4.3 1 6.28 1 14.2C1 13.0997 3.16 10.9 11.8 10.9V14.2L19 7.6Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            </a>

                            <a href="">
                            <button class="w-9 h-9 rounded-full  bg-gray-400 hover:bg-red-300 ring-gray-100 ring-2 shadow-lg text-black  flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 " aria-label="edit note" role="button">
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.92 3.6H13.68V2.52C13.68 1.85165 13.4145 1.21068 12.9419 0.738091C12.4693 0.265499 11.8283 0 11.16 0H6.84C6.17165 0 5.53068 0.265499 5.05809 0.738091C4.5855 1.21068 4.32 1.85165 4.32 2.52V3.6H1.08C0.793566 3.6 0.518864 3.71379 0.316325 3.91632C0.113785 4.11886 0 4.39357 0 4.68C0 4.96643 0.113785 5.24114 0.316325 5.44368C0.518864 5.64621 0.793566 5.76 1.08 5.76H1.44V18C1.44 18.4774 1.62964 18.9352 1.96721 19.2728C2.30477 19.6104 2.76261 19.8 3.24 19.8H14.76C15.2374 19.8 15.6952 19.6104 16.0328 19.2728C16.3704 18.9352 16.56 18.4774 16.56 18V5.76H16.92C17.2064 5.76 17.4811 5.64621 17.6837 5.44368C17.8862 5.24114 18 4.96643 18 4.68C18 4.39357 17.8862 4.11886 17.6837 3.91632C17.4811 3.71379 17.2064 3.6 16.92 3.6ZM6.48 2.52C6.48 2.42452 6.51793 2.33295 6.58544 2.26544C6.65295 2.19793 6.74452 2.16 6.84 2.16H11.16C11.2555 2.16 11.347 2.19793 11.4146 2.26544C11.4821 2.33295 11.52 2.42452 11.52 2.52V3.6H6.48V2.52ZM14.4 17.64H3.6V5.76H14.4V17.64ZM7.92 8.64V14.4C7.92 14.6864 7.80622 14.9611 7.60368 15.1637C7.40114 15.3662 7.12643 15.48 6.84 15.48C6.55357 15.48 6.27886 15.3662 6.07632 15.1637C5.87379 14.9611 5.76 14.6864 5.76 14.4V8.64C5.76 8.35357 5.87379 8.07886 6.07632 7.87632C6.27886 7.67378 6.55357 7.56 6.84 7.56C7.12643 7.56 7.40114 7.67378 7.60368 7.87632C7.80622 8.07886 7.92 8.35357 7.92 8.64ZM12.24 8.64V14.4C12.24 14.6864 12.1262 14.9611 11.9237 15.1637C11.7211 15.3662 11.4464 15.48 11.16 15.48C10.8736 15.48 10.5989 15.3662 10.3963 15.1637C10.1938 14.9611 10.08 14.6864 10.08 14.4V8.64C10.08 8.35357 10.1938 8.07886 10.3963 7.87632C10.5989 7.67378 10.8736 7.56 11.16 7.56C11.4464 7.56 11.7211 7.67378 11.9237 7.87632C12.1262 8.07886 12.24 8.35357 12.24 8.64Z" fill="white"/>
                                </svg>
                            </button>
                            </a>

                        </div>
                    </div>

                    <img class="w-[310px] h-[284px] -mt-[110px]" src="Butik/Kemeja Cowok Motif Batik Tujuh Rupa.png" alt="" src="Butik/Kemeja Cowok Motif Batik Tujuh Rupa.png">
                    {{-- <p class="text-right text-sm pt-4 -mb-3">March 28, 2020</p> --}}
                </div>


            </div>
        </div>
    </div>


     <!-- Footer -->
     <footer class="footer footer-center p-5 bg-[#755252] text-base-content rounded">
        <nav>
          <div class="grid grid-flow-col gap-4 -mb-6">
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-white"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-white"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-white"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
          </div>
        </nav>
        <aside>
          <p class="text-white">Copyright © 2023 - All right reserved by Tim Joki Industries Ltd</p>
        </aside>
      </footer>

    <script>
        const toggleSearch = () => {
            document.getElementById("searchInput").classList.toggle("hidden");
        };
        const mdOptionsToggle = () => {
            document.getElementById("md-searchbar").classList.toggle("hidden");
            document.getElementById("md-searchbar").classList.toggle("flex");
        };
        const openMenu = () => {
            document.getElementById("mobile-menu").classList.remove("hidden");
        };
        const closeMenu = () => {
            document.getElementById("mobile-menu").classList.add("hidden");
        };

    </script>
    <!-- partial -->
    <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js'></script>
</body>
</html>
