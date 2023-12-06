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
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Header -->
    <div class="flex flex-wrap place-items-center fixed w-full">
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
    <div class="">
        <div class="pt-22 overscroll-contain overflow-auto h-[90%] w-full bg-white text-slate-700 text-sm leading-6">


            <!-- Hero Page -->
            <section>
                <div class="text-black py-40">
                    <div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-32">
                        <div class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8">
                            <h1 class="text-3xl md:text-5xl p-2 text-[#8a5151] tracking-loose">Batik Essence</h1>
                            <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Threads of Heritage, Woven in Time
                            </h2>
                            <p class="text-sm md:text-base text-black mb-4">Embark on a journey through the intricate threads of Indonesian batik. Uncover the artistry that transcends time. Dive into our collection and wrap yourself in cultural splendor.</p>
                            <a href="#"
                                class="bg-transparent hover:bg-[#8a5151] text-[#8a5151] hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-[#8a5151] hover:border-transparent">
                                Explore Now</a>
                        </div>
                        <div class="p-8 mt-12 mb-6 md:mb-0 md:mt-0 ml-0 lg:pl-16 lg:w-2/3 justify-center">
                            <div class="h-48 flex flex-wrap content-center">
                                <div>
                                    <img class="inline-block mt-28 hidden lg:block h-[277px] min-w-[225px]" src="ASSET/Frame 8 KECIL.PNG"></div>
                                    <div>
                                        <img class="inline-block mt-24 md:mt-0 p-8 md:p-0 h-[456px] min-w-[384px]"  src="ASSET/Frame 5 BESAR.PNG"></div>
                                        <div>
                                            <img class="inline-block mt-2 xl:mt-28 hidden 2xl:block h-[277px] min-w-[225px]" src="ASSET/Frame 6 KECIL.PNG"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Service -->
            <div class="w-full mx-auto bg-gray-100">
            <div class="2xl:container mx-auto md:py-12 py-9 mb-32">
                <h1 class="text-center text-4xl text-[#8a5151] font-medium mb-8">Service</h1>
                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-8 md:gap-12 gap-14 lg:px-20 lg:py-12 py-10 md:px-12 px-4 pl-12">
                    <!-- Delivery grid Card -->
                    <div class="">
                        <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg1.svg" alt="delivery">
                        {{-- <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg1dark.svg" alt="delivery"> --}}
                        <h3 class="text-xl leading-5 font-semibold text-[#8a5151] lg:mt-10 mt-8">Delivery</h3>
                        <p class="text-base leading-6 font-normal text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">Free worldwide delivery over orders above $100</p>
                    </div>

                    <!-- customer Grid Card -->

                    <div class="">
                        <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg2.svg" alt="Customer Care">
                        {{-- <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg2dark.svg" alt="Customer Care"> --}}
                        <h3 class="text-xl leading-5 font-semibold text-[#8a5151] lg:mt-10 mt-8">Customer Care</h3>
                        <p class="text-base leading-6 font-normal text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">Our customer care is available 24/7 at <span class="font-semibold cursor-pointer">+495-589-509</span> and <span class="font-semibold cursor-pointer">customercare@gmail.com</span></p>
                    </div>

                    <!-- Recycle Grid Card -->

                    <div class="">
                        <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg3.svg" alt="Recycle">
                        {{-- <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg3dark.svg" alt="Recycle"> --}}
                        <h3 class="text-xl leading-5 font-semibold text-[#8a5151] lg:mt-10 mt-8">Recycle</h3>
                        <p class="text-base leading-6 font-normal text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">All out products are 100 percent recycable</p>
                    </div>

                    <!-- Secure Payment Card -->

                    <div class="">
                        <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg4.svg" alt="Secure Payment">
                        {{-- <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg4dark.svg" alt="Secure Payment"> --}}
                        <h3 class="text-xl leading-5 font-semibold text-[#8a5151] lg:mt-10 mt-8">Secure Payment</h3>
                        <p class="text-base leading-6 font-normal text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">Transaction process has end to end encryption</p>
                    </div>
                </div>
                </div>
            </div>

            <!-- Featured Products -->
            <div class="w-full bg-white mb-40">
                <h1 class="text-center text-4xl text-[#8a5151] font-medium mb-8">Our Product</h1>
                <div class="flex items-center justify-center w-[77%] mx-auto h-full py-24 sm:py-8 px-4">
                    <div class="w-full relative flex items-center justify-center">
                        <button aria-label="slide backward" class="absolute bg-white h-10 w-10 rounded-full flex flex-col justify-center items-center z-30 left-0 ml-10 focus:outline-none focus:bg-[#8a5151] focus:ring-2 focus:ring-offset-2 focus:ring-[#8a5151] text-[#8a5151] focus:text-white" id="prev">
                            <svg class="" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                            <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                               @forelse ($Carousel as $item)
                               <div class="flex flex-shrink-0 relative h-[30rem] w-full sm:w-auto">
                                <img src="{{$item['Img']}}" alt="black chair and white table" class="object-cover object-center w-80 h-full" />
                                <div class="bg-black/[35%] absolute w-80 h-full p-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white">{{$item['Desc']}}</h3>
                                    <div class="flex h-full items-end pb-6">
                                        <h2 class="lg:text-md font-mono leading-4 text-base lg:leading-5 text-white">{{$item['Price']}}</h2>
                                    </div>
                                </div>
                                </div>
                               @empty

                               @endforelse


                            </div>
                        </div>
                        <button aria-label="slide forward" class="absolute z-30 right-0 mr-10 bg-white h-10 w-10 rounded-full flex flex-col justify-center items-center focus:outline-none focus:bg-[#8a5151] focus:ring-2 focus:ring-offset-2 focus:ring-[#8a5151] text-[#8a5151] focus:text-white" id="next">
                            <svg class="" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>





            <!-- Footer -->
            <footer class="footer footer-center p-5 bg-[#755252] text-base-content rounded">
                {{-- <nav class="grid grid-flow-col gap-4 text-white -mb-6">
                  <a class="link link-hover">About us</a>
                  <a class="link link-hover">Contact</a>
                  <a class="link link-hover">Jobs</a>
                  <a class="link link-hover">Press kit</a>
                </nav> --}}
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


        </div>
    </div>

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

        let defaultTransform = 0;
        function goNext() {
            defaultTransform = defaultTransform - 398;
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        next.addEventListener("click", goNext);
        function goPrev() {
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
            else defaultTransform = defaultTransform + 398;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        prev.addEventListener("click", goPrev);

    </script>
</body>
</html>
