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
                    <div id="md-searchbar" class="bg-[#755252] hidden lg:hidden py-5 px-6 items-center justify-between">
                        <div class="flex items-center space-x-3 text-white">
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 20.25L8.625 14.625M20.25 9.75C20.25 10.6364 20.0754 11.5142 19.7362 12.3331C19.397 13.1521 18.8998 13.8962 18.273 14.523C17.6462 15.1498 16.9021 15.647 16.0831 15.9862C15.2642 16.3254 14.3864 16.5 13.5 16.5C12.6136 16.5 11.7358 16.3254 10.9169 15.9862C10.0979 15.647 9.35383 15.1498 8.72703 14.523C8.10023 13.8962 7.60303 13.1521 7.26381 12.3331C6.92459 11.5142 6.75 10.6364 6.75 9.75C6.75 7.95979 7.46116 6.2429 8.72703 4.97703C9.9929 3.71116 11.7098 3 13.5 3C15.2902 3 17.0071 3.71116 18.273 4.97703C19.5388 6.2429 20.25 7.95979 20.25 9.75Z" stroke="#EAEAEA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <input type="text" placeholder="Search for products" class="text-sm leading-none text-gray-300 bg-[#755252] focus:outline-none" />
                        </div>
                        <div class="space-x-6">
                            <button aria-label="view favourites" class="text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5 3C14.76 3 13.09 3.81 12 5.09C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.42 2 8.5C2 12.28 5.4 15.36 10.55 20.04L12 21.35L13.45 20.03C18.6 15.36 22 12.28 22 8.5C22 5.42 19.58 3 16.5 3ZM12.1 18.55L12 18.65L11.9 18.55C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5C9.04 5 10.54 5.99 11.07 7.36H12.94C13.46 5.99 14.96 5 16.5 5C18.5 5 20 6.5 20 8.5C20 11.39 16.86 14.24 12.1 18.55Z" fill="#EAEAEA"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- For md screen size -->

                    <!-- For large screens -->
                    <div class="bg-[#755252] px-4 py-3">
                        <div class="container mx-auto flex items-center justify-between">
                            <h1 class="cursor-pointer mt-2">
                                <img class="-my-10 h-36 w-56" src="logo.png" alt="logo">
                            </h1>
                            <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
                                <li>
                                    <a href="" class="text-white text-base focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline hover:underline-offset-[15px]">Home</a>
                                </li>
                                <li>
                                    <a href="" class="text-white text-base focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline hover:underline-offset-[15px]">Category</a>
                                </li>
                                <li>
                                    <a href="" class="text-white text-base focus:outline-none focus:ring-2 focus:ring-gray-800 underline underline-offset-[15px]">Collection</a>
                                </li>
                                <li>
                                    <a href="" class="text-white text-base focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline hover:underline-offset-[15px]">Support</a>
                                </li>
                            </ul>

                            <div class="md:w-2/12 justify-end flex items-center space-x-4 xl:space-x-8">
                                <div class="hidden lg:flex items-center">
                                    <button onclick="toggleSearch()" aria-label="search items" class="w-5 hover:text-gray-300 text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 20.25L8.625 14.625M20.25 9.75C20.25 10.6364 20.0754 11.5142 19.7362 12.3331C19.397 13.1521 18.8998 13.8962 18.273 14.523C17.6462 15.1498 16.9021 15.647 16.0831 15.9862C15.2642 16.3254 14.3864 16.5 13.5 16.5C12.6136 16.5 11.7358 16.3254 10.9169 15.9862C10.0979 15.647 9.35383 15.1498 8.72703 14.523C8.10023 13.8962 7.60303 13.1521 7.26381 12.3331C6.92459 11.5142 6.75 10.6364 6.75 9.75C6.75 7.95979 7.46116 6.2429 8.72703 4.97703C9.9929 3.71116 11.7098 3 13.5 3C15.2902 3 17.0071 3.71116 18.273 4.97703C19.5388 6.2429 20.25 7.95979 20.25 9.75Z" stroke="#EAEAEA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <input id="searchInput" type="text" placeholder="search" class="hidden text-sm bg-[#755252] placeholder-gray-300 text-white rounded ml-1 border border-transparent focus:outline-none focus:border-gray-400 px-1" />
                                </div>
                                <div class="hidden lg:flex items-center space-x-4 xl:space-x-8">
                                    <button aria-label="view favourites" class="w-6 hover:text-gray-300 text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.5 3C14.76 3 13.09 3.81 12 5.09C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.42 2 8.5C2 12.28 5.4 15.36 10.55 20.04L12 21.35L13.45 20.03C18.6 15.36 22 12.28 22 8.5C22 5.42 19.58 3 16.5 3ZM12.1 18.55L12 18.65L11.9 18.55C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5C9.04 5 10.54 5.99 11.07 7.36H12.94C13.46 5.99 14.96 5 16.5 5C18.5 5 20 6.5 20 8.5C20 11.39 16.86 14.24 12.1 18.55Z" fill="#EAEAEA"/>
                                        </svg>
                                    </button>
                                </div>

                                <div class="flex lg:hidden">
                                    <button aria-label="show options" onclick="mdOptionsToggle()" class="text-white hover:text-gray-300 hidden md:flex focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                                        <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5dark.svg" alt="toggler">
                                    </button>

                                    <button aria-label="open menu" onclick="openMenu()" class="text-white hover:text-gray-300 md:hidden focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                                        <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5dark.svg" alt="toggler">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- For small screen -->
                    <div id="mobile-menu" class="hidden absolute bg-[#755252] z-10 inset-0 md:hidden flex flex-col h-screen w-full">
                        <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700 pb-4 p-4">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 20.25L8.625 14.625M20.25 9.75C20.25 10.6364 20.0754 11.5142 19.7362 12.3331C19.397 13.1521 18.8998 13.8962 18.273 14.523C17.6462 15.1498 16.9021 15.647 16.0831 15.9862C15.2642 16.3254 14.3864 16.5 13.5 16.5C12.6136 16.5 11.7358 16.3254 10.9169 15.9862C10.0979 15.647 9.35383 15.1498 8.72703 14.523C8.10023 13.8962 7.60303 13.1521 7.26381 12.3331C6.92459 11.5142 6.75 10.6364 6.75 9.75C6.75 7.95979 7.46116 6.2429 8.72703 4.97703C9.9929 3.71116 11.7098 3 13.5 3C15.2902 3 17.0071 3.71116 18.273 4.97703C19.5388 6.2429 20.25 7.95979 20.25 9.75Z" stroke="#EAEAEA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <input type="text" placeholder="Search for products" class="text-sm dark:bg-[#755252] text-gray-600 placeholder-gray-600 dark:placeholder-gray-300 focus:outline-none" />
                            </div>

                            <button onclick="closeMenu()" aria-label="close menu" class="focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg6.svg" alt="cross">
                                {{-- <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg6dark.svg" alt="cross"> --}}
                            </button>
                        </div>
                        <div class="mt-6 p-4">
                            <ul class="flex flex-col space-y-6">
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                                        Home
                                        <div>
                                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                            {{-- <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow"> --}}
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                                        Category
                                        <div>
                                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                            {{-- <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow"> --}}
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                                        Collection
                                        <div>
                                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                            {{-- <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow"> --}}
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                                        Support
                                        <div>
                                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                            {{-- <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow"> --}}
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
                                            {{-- <img class="w-5 dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4dark.svg" alt="bag"> --}}
                                        </div>
                                        <p class="text-base">Cart</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dark:text-white text-gray-800 flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">
                                        <div>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5 3C14.76 3 13.09 3.81 12 5.09C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.42 2 8.5C2 12.28 5.4 15.36 10.55 20.04L12 21.35L13.45 20.03C18.6 15.36 22 12.28 22 8.5C22 5.42 19.58 3 16.5 3ZM12.1 18.55L12 18.65L11.9 18.55C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5C9.04 5 10.54 5.99 11.07 7.36H12.94C13.46 5.99 14.96 5 16.5 5C18.5 5 20 6.5 20 8.5C20 11.39 16.86 14.24 12.1 18.55Z" fill="#EAEAEA"/>
                                    </svg>

                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5 3C14.76 3 13.09 3.81 12 5.09C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.42 2 8.5C2 12.28 5.4 15.36 10.55 20.04L12 21.35L13.45 20.03C18.6 15.36 22 12.28 22 8.5C22 5.42 19.58 3 16.5 3ZM12.1 18.55L12 18.65L11.9 18.55C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5C9.04 5 10.54 5.99 11.07 7.36H12.94C13.46 5.99 14.96 5 16.5 5C18.5 5 20 6.5 20 8.5C20 11.39 16.86 14.24 12.1 18.55Z" fill="#EAEAEA"/>
                                    </svg>

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
        {{-- Customize Section --}}
        <div class="relative rounded-xl overflow-auto mt-10">
            {{-- Title --}}
            <h1 class="text-center text-4xl text-[#8a5151] font-medium mb-10">Customize Your Batik</h1>
            <div class="flex justify-center space-x-4 text-white text-sm font-bold leading-6 rounded-lg mb-10">
                <div class="max-w-[1280px] rounded-lg flex justify-center bg-white p-4 shadow-lg">
                    {{------------------------------------------------------------------------
                    *                                  INFO
                    * -----------------------------------------------------------------------
                    * Variabel yang digunakan :
                    * Design (String) :
                    *          1. Kemeja Cowok
                    *          2. Kutu Baru
                    *          3. Blazer
                    *          4. ???
                    *
                    * Motif (String) :
                    *          1. Motif Batik Basurek
                    *          2. Motif Batik Sekar Jagad
                    *          3. Motif Batik Ceplok
                    *          4. Motif Batik Tujuh Rupa
                    *
                    * Metode penamaan file : 'Butik/' + Design + Motif + '.png'
                    * Hasil : 'Butik/Kutu Baru Motif Batik Tujuh Rupa 1.png'
                    *------------------------------------------------------------------------}}

                    <div class="flex w-[1280px] h-[720px]" x-data="{
                        //For edit form just change this value to the value from database
                        motif: 'Motif Batik Tujuh Rupa', // Set the default value for 'motif' to 1
                        desain: 'Kemeja Cowok', // Set the default value for 'desain' to 'BESAR'
                        }">
                        {{-- Display Preview --}}
                        <div class=" col-span-4 w-[45%] flex flex-col gap-10 items-center pt-10">
                            {{-- Display --}}

                            <div class="">
                                <img class="object-cover object-center w-full h-[348px]" :src="'Butik/' + desain + ' ' + motif + '.png'" alt="">
                            </div>

                            {{-- Design Option --}}
                            <div class="mt-8 mx-auto items-center justify-center">

                                {{-- bagian ini looping sebanyak jumpah motif,
                                    variabel motif pasang di <input id="varMotif" value="varMotif"> dan <label for="varMotif">--}}

                                <div class="inline-block mx-4">
                                    <input class="peer/desain1" name="answer" x-model="desain" type="radio" id="id:Kemeja Cowok" hidden="hidden" value="Kemeja Cowok"/>
                                    <label for="id:Kemeja Cowok" class="peer-checked/desain1:border-2 peer-checked/desain1:border-[#8a5151] -mt-1 -ml-1 px-2 py-1 rounded-lg flex w-[110px] h-28">
                                        <img class="w-full" :src="'Butik/' + 'Kemeja Cowok' + ' ' + motif + '.png'" alt="">
                                    </label>
                                </div>

                                <div class="inline-block mx-4 ">
                                    <input class="peer/desain2" name="answer" x-model="desain" type="radio" id="id:Kutu Baru" hidden="hidden" value="Kutu Baru"/>
                                    <label for="id:Kutu Baru" class="peer-checked/desain2:border-2 peer-checked/desain2:border-[#8a5151] -mt-1 -ml-1 px-2 py-1 rounded-lg flex w-[110px] h-28">
                                        <img class="w-full" :src="'Butik/' + 'Kutu Baru' + ' ' + motif + '.png'" alt="">
                                    </label>
                                </div>
                                <div class="inline-block mx-4">
                                    <input class="peer/desain3" name="answer" x-model="desain" type="radio" id="id:Blazer" hidden="hidden" value="Blazer"/>
                                    <label for="id:Blazer" class="peer-checked/desain3:border-2 peer-checked/desain3:border-[#8a5151] -mt-1 -ml-1 px-2 py-1 rounded-lg flex w-[110px] h-28">
                                        <img class="w-full" :src="'Butik/' + 'Blazer' + ' ' + motif + '.png'" alt="">
                                    </label>
                                </div>

                            </div>

                        </div>

                        {{-- Additional Content --}}
                        <div class="col-span-5 w-[55%] mx-auto ">
                            {{-- Title --}}
                            <div class="mb-4">
                                <input type="text" class="text-5xl text-[#8a5151] border-none rounded-md w-full py-4 mt-4" placeholder="Custom Title Here">
                            </div>

                            <h1 class="text-center text-4xl text-[#8a5151] font-medium">Batik Motif</h1>
                            {{-- Motif Option --}}
                            <div class="grid grid-cols-2 pl-2 text-black mb-4">

                                <input class="peer/motifKain1 sr-only" name="motifKain" x-model="motif" type="radio" id="motifKain1" value="Motif Batik Tujuh Rupa"/>
                                <label for="motifKain1" class="m-7 peer-checked/motifKain1:text-[#8a5151] peer-checked/motifKain1:shadow-2xl h-[100px] rounded-xl">
                                    <div class="rounded-xl">
                                        <div class="overflow-visible relative max-w-md mx-auto bg-white ring-1 ring-black/5 rounded-xl flex items-center gap-6">
                                            <img class="absolute -left-6 w-28 h-28 rounded-lg" src="Butik/Motif Batik Tujuh Rupa.png">
                                            <div class="flex flex-col h-[6.3rem] py-2 pl-24">
                                                <strong class=" font-medium text-xl">Motif Batik Tujuh Rupa</strong>
                                                <span class="text-slate-500 font-medium">Pekalongan, Center Jawa.</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>

                                <input class="peer/motifKain2 sr-only" name="motifKain" x-model="motif" type="radio" id="motifKain2" value="Motif Batik Sekar Jagad"/>
                                <label for="motifKain2" class="m-7 peer-checked/motifKain2:text-[#8a5151] peer-checked/motifKain2:shadow-2xl h-[100px] rounded-xl">
                                    <div class="rounded-xl">
                                        <div class="overflow-visible relative max-w-md mx-auto bg-white ring-1 ring-black/5 rounded-xl flex items-center gap-6">
                                            <img class="absolute -left-6 w-28 h-28 rounded-lg" src="Butik/Motif Batik Sekar Jagad.png">
                                            <div class="flex flex-col h-[6.3rem] py-2 pl-24">
                                                <strong class=" font-medium text-xl">Motif Batik Sekar Jagad</strong>
                                                <span class="text-slate-500 font-medium">Solo & Yogyakarta.</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>

                                <input class="peer/motifKain3 sr-only" name="motifKain" x-model="motif" type="radio" id="motifKain3" value="Motif Batik Ceplok"/>
                                <label for="motifKain3" class="m-7 peer-checked/motifKain3:text-[#8a5151] peer-checked/motifKain3:shadow-2xl h-[100px] rounded-xl">
                                    <div class="rounded-xl">
                                        <div class="overflow-visible relative max-w-md mx-auto bg-white ring-1 ring-black/5 rounded-xl flex items-center gap-6">
                                            <img class="absolute -left-6 w-28 h-28 rounded-lg" src="Butik/Motif Batik Ceplok.png">
                                            <div class="flex flex-col h-[6.3rem] py-2 pl-24">
                                                <strong class=" font-medium text-xl">Motif Batik Ceplok</strong>
                                                <span class="text-slate-500 font-medium">Yogyakarta, Bigcity.</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>

                                <input class="peer/motifKain4 sr-only" name="motifKain" x-model="motif" type="radio" id="motifKain4" value="Motif Batik Basurek"/>
                                <label for="motifKain4" class="m-7 peer-checked/motifKain4:text-[#8a5151] peer-checked/motifKain4:shadow-2xl h-[100px] rounded-xl">
                                    <div class="rounded-xl">
                                        <div class="overflow-visible relative max-w-md mx-auto bg-white ring-1 ring-black/5 rounded-xl flex items-center gap-6">
                                            <img class="absolute -left-6 w-28 h-28 rounded-lg" src="Butik/Motif Batik Basurek.png">
                                            <div class="flex flex-col h-[6.3rem] py-2 pl-24">
                                                <strong class=" font-medium text-xl">Motif Batik Basurek</strong>
                                                <span class="text-slate-500 font-medium">Bengkulu, Southwest of Sumatra Island.</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>

                            </div>

                            <h1 class="text-center text-4xl text-[#8a5151] font-medium">Fabric Material</h1>
                            {{-- Fabric Option --}}
                            <div class="grid grid-cols-2 pl-2 text-black mb-4">

                                <input class="peer/fabricMaterial1 sr-only" name="material" x-model="material" type="radio" id="fabricMaterial1" value="Silk"/>
                                <label for="fabricMaterial1" class="m-7 peer-checked/fabricMaterial1:text-[#8a5151] peer-checked/fabricMaterial1:shadow-2xl h-[100px] rounded-xl">
                                    <div class="rounded-xl">
                                        <div class="overflow-visible relative max-w-md mx-auto bg-white ring-1 ring-black/5 rounded-xl flex items-center gap-6">
                                            <img class="absolute -left-6 w-28 h-28 rounded-lg" src="Butik/Silk.jpg">
                                            <div class="flex flex-col h-[6.3rem] py-2 pl-24">
                                                <strong class=" font-medium text-xl">Silk</strong>
                                                <span class="text-slate-500 font-medium">Smooth, soft, glossy, exclusive.</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>

                                <input class="peer/fabricMaterial2 sr-only" name="material" x-model="material" type="radio" id="fabricMaterial2" value="Cotton"/>
                                <label for="fabricMaterial2" class="m-7 peer-checked/fabricMaterial2:text-[#8a5151] peer-checked/fabricMaterial2:shadow-2xl h-[100px] rounded-xl">
                                    <div class="rounded-xl">
                                        <div class="overflow-visible relative max-w-md mx-auto bg-white ring-1 ring-black/5 rounded-xl flex items-center gap-6">
                                            <img class="absolute -left-6 w-28 h-28 rounded-lg" src="Butik/Cotton.jpg">
                                            <div class="flex flex-col h-[6.3rem] py-2 pl-24">
                                                <strong class=" font-medium text-xl">Cotton</strong>
                                                <span class="text-slate-500 font-medium">Soft, lightweight, comfortable, natural.</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>

                            </div>
                            {{-- Form --}}
                            <div class="hidden">
                                <input class="text-black" type="text" :value="'Butik/' + desain + ' ' + motif + '.png'">
                            </div>
                            {{-- end form --}}
                            {{-- <div class="bg-gray-100 p-10"></div> --}}
                            {{-- <div class="bg-gray-200 p-10 grid grid-cols-2 gap-4">
                                <div class="bg-black p-5"></div>
                                <div class="bg-black p-5"></div>
                                <div class="bg-black p-5"></div>

                            </div> --}}

                        </div>

                    </div>

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
