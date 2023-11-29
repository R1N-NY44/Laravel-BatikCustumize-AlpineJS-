<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
                    <div class="dark:bg-[#755252] bg-gray-50 px-4 py-6">
                        <div class="container mx-auto flex items-center justify-between">
                            <h1 class="md:w-2/12 cursor-pointer text-gray-800 dark:text-white" aria-label="the Crib.">
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg1.svg" alt="logo">
                               <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg1dark.svg" alt="logo">
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
        {{-- Customize Section --}}
        <div class="relative rounded-xl overflow-auto mt-10">
            {{-- Title --}}
            <h1 class="text-center text-4xl text-[#8a5151] font-medium mb-10">Customize Your Batik</h1>
            <div class="flex justify-center space-x-4 font-mono text-white text-sm font-bold leading-6 bg-stripes-blue rounded-lg">
                <div class="max-w-[1280px] rounded-lg flex justify-center bg-blue-500 p-4 shadow-lg">
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

                    <div class="w-full grid grid-cols-9 gap-3" x-data="{
                        //For edit form just change this value to the value from database
                        motif: 1, // Set the default value for 'motif' to 1
                        desain: 'Kemeja Cowok', // Set the default value for 'desain' to 'BESAR'
                    }">
                        {{-- Display Preview --}}
                        <div class="bg-gray-300 col-span-4 w-full flex flex-col p-12">

                            {{-- Display --}}
                            <img :src="'Butik/' + desain + motif + '.png'" alt="">

                            {{-- Design Option --}}
                            <div class="mt-8">

                                {{-- bagian ini looping sebanyak jumpah motif,
                                    variabel motif pasang di <input id="varMotif" value="varMotif"> dan <label for="varMotif">--}}

                                {{-- Section for looping --}}
                                <div class="inline-block radio mr-24">
                                    <input name="answer" x-model="desain" type="radio" id="id:Kemeja Cowok" hidden="hidden" value="Kemeja Cowok"/>
                                    <label for="id:Kemeja Cowok" class="-mt-1 -ml-1 px-2 py-1 rounded-lg flex justify-center items-center text-3xl font-bold w-24 h-28">
                                        <img :src="'Butik/' + 'Kemeja Cowok' + motif + '.png'" alt="">
                                    </label>
                                </div>
                                {{-- Section for looping --}}

                                {{-- Delete this after setup --}}
                                <div class="inline-block radio mr-24">
                                    <input name="answer" x-model="desain" type="radio" id="B2" hidden="hidden" value="KutuBaru"/>
                                    <label for="B2" class="-mt-1 -ml-1 px-2 py-1 rounded-lg flex justify-center items-center text-3xl font-bold w-24 h-28">
                                        <img :src="'Butik/' + 'KutuBaru' + motif + '.png'" alt="">
                                    </label>
                                </div>
                                {{-- Delete this after setup --}}

                            </div>

                        </div>

                        {{-- Additional Content --}}
                        <div class="bg-gray-600 col-span-5 w-full flex flex-row pl-5 pt-5">

                            <div class="inline-block radio mr-40">
                                <input name="motifKain" x-model="motif" type="radio" id="motifKain1" hidden="hidden" value="1"/>
                                <label for="motifKain1" class="-ml-1 -mt-1 px-2 py-1 rounded-lg flex justify-center items-center text-3xl font-bold w-24 h-10 ">
                                    <img src="Butik/motif1.png" alt="">
                                    {{-- <p class="text-black">Motif 1</p> --}}
                                </label>
                            </div>

                            <div class="inline-block radio mr-40">
                                <input name="motifKain" x-model="motif" type="radio" id="motifKain2" hidden="hidden" value="2"/>
                                <label for="motifKain2" class="-ml-1 -mt-1 px-2 py-1 rounded-lg flex justify-center items-center text-3xl font-bold w-24 h-10 ">
                                    <img src="Butik/motif2.png" alt="">
                                    {{-- <p class="text-black">Motif 2</p> --}}
                                </label>
                            </div>

                            <div class="inline-block radio mr-40">
                                <input name="motifKain" x-model="motif" type="radio" id="motifKain3" hidden="hidden" value="3"/>
                                <label for="motifKain3" class="-ml-1 -mt-1 px-2 py-1 rounded-lg flex justify-center items-center text-3xl font-bold w-24 h-10 ">
                                    <img src="Butik/motif3.png" alt="">
                                    {{-- <p class="text-black">Motif 3</p> --}}
                                </label>
                            </div>

                            <div class="inline-block radio mr-40">
                                <input name="motifKain" x-model="motif" type="radio" id="motifKain4" hidden="hidden" value="4"/>
                                <label for="motifKain4" class="-ml-1 -mt-1 px-2 py-1 rounded-lg flex justify-center items-center text-3xl font-bold w-24 h-10 ">
                                    <img src="Butik/motif4.png" alt="">
                                    {{-- <p class="text-black">Motif 4</p> --}}
                                </label>
                            </div>

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
