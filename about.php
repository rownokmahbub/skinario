<?php
include("./dbconf.php");

?>
<!DOCTYPE html>
<html lang="en" data-theme="night">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Skinario</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.1/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class=" mx-auto  relative z-50">


        <nav class="bg-cyan-900 sticky top-0 left-0 w-full text-lg font-semibold">
            <div class="container flex flex-wrap items-center justify-between mx-auto py-8">
                <a href="index.php" class="flex items-center">

                    <span class="self-center text-2xl font-bold whitespace-nowrap text-white italic">Skinario.</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0  border-gray-700">
                        <li>
                            <a href="index.php"
                                class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100  md:border-0  md:p-0 text-white md:hover:text-cyan-500  hover:text-white md:hover:bg-transparent"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="about.php"
                                class="block py-2 pl-3 pr-4  bg-cyan-500 rounded md:bg-transparent md:p-0 text-white md:text-cyan-500">About</a>
                        </li>

                        <ul
                            class="flex flex-col font-medium p-4 md:p-0 mt-4 border rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0 ">

                            <li>
                                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                    class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-cyan-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-cyan-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Services
                                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg></button>
                                <!-- Dropdown menu -->
                                <div id="dropdownNavbar"
                                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                        aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a href="product.php"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Product</a>
                                        </li>

                                        <li>
                                            <a href="medicine.php"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Medicine</a>
                                        </li>
                                    </ul>


                            <li>
                                <a href="doctor.php"
                                    class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100  md:border-0  md:p-0 text-white md:hover:text-cyan-500  hover:text-white md:hover:bg-transparent">Doctor</a>
                            </li>
                            <li>
                                <a href="Rewards.php"
                                    class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100  md:border-0  md:p-0 text-white md:hover:text-cyan-500  hover:text-white md:hover:bg-transparent">Rewards</a>
                            </li>
                            <li>
                                <a href="addcart.php"
                                    class="flex group cursor-pointer justify-center items-center gap-2 relative py-2 pl-3 pr-4  rounded hover:bg-gray-100  md:border-0  md:p-0  hover:text-white md:hover:bg-transparent"><svg
                                        class="text-white group-hover:text-cyan-500 " xmlns="http://www.w3.org/2000/svg"
                                        width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="10" cy="20.5" r="1" />
                                        <circle cx="18" cy="20.5" r="1" />
                                        <path d="M2.5 2.5h3l2.7 12.4a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6l1.6-8.4H7.1" />
                                    </svg>
                                    <p
                                        class="absolute -top-4 -right-4 bg-primary flex justify-center items-center p-2 text-xs rounded-full w-5 h-5 text-white">
                                        <?= $cartItems  ?> </p>
                                </a>
                            </li>
                            <?php
              if (isAuth()) {
              ?>
                            <li>
                                <a href="profile.php" class="btn btn-sm btn-primary capitalize">Profile</a>
                            </li>
                            <?php
              } else {
              ?>
                            <li>
                                <a href="signin.php" class="btn btn-sm btn-primary capitalize">Sign In</a>
                            </li>
                            <?php
              }
              ?>
                        </ul>
                </div>
            </div>
        </nav>

    </div>
    <!-- hero section -->


    <section class="bg-slate-900  bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div class="py-8 px-4 mx-auto flex flex-col justify-center items-center text-center lg:py-16 z-10 relative">

            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight md:text-5xl lg:text-6xl text-white capitalize leading-10">
                We provide world<br> class product</h1>


            <img class="object-contain w-full max-w-3xl max-h-[600px]" src="./assets/about.png" alt="">
        </div>

        <div class="bg-gradient-to-b from-cyan-900 w-full h-full absolute top-0 left-0 z-0"></div>

    </section>
    <section class="bg-slate-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <p class="text-2xl md:text-5xl text-center font-bold mb-20 capitalize">Our Mission</p>
        <div
            class=" grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 container mx-auto items-center px-5 md:px-0 gap-10 mb-20">
            <div
                class="flex flex-col justify-center items-center gap-4 p-10 bg-slate-800 rounded-xl shadow-lg shadow-purple-700">
                <div
                    class="flex justify-center bg-purple-600 px-3 py-2 rounded-full w-16 h-16 items-center shadow-xl shadow-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 3v18h18" />
                        <path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3" />
                    </svg>
                </div>
                <p class="text-3xl font-bold text-center">Free Analysis</p>
                <p class="text-xl text-center">You can analyze the type of your skin with our analysis team and choose
                    basic products according to your skin type.</p>

            </div>
            <div
                class="flex flex-col justify-center items-center gap-4 p-10 bg-slate-800 rounded-xl shadow-lg shadow-cyan-700">
                <div
                    class="flex justify-center bg-cyan-600 px-3 py-2 rounded-full w-16 h-16 items-center shadow-xl shadow-cyan-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <p class="text-3xl font-bold text-center">Expert Doctor</p>
                <p class="text-xl text-center">here we have specialized doctor to provide you with the ultimate
                    suggestions about your skin</p>

            </div>
            <div
                class="flex flex-col justify-center items-center gap-4 p-10 bg-slate-800 rounded-xl shadow-lg shadow-amber-700">
                <div
                    class="flex justify-center bg-amber-600 px-3 py-2 rounded-full w-16 h-16 items-center shadow-xl shadow-amber-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
                    </svg>
                </div>
                <p class="text-3xl font-bold text-center">Skincare product</p>
                <p class="text-xl text-center">we provide with the world class products imported from
                    USA,UK,Canada,Korea,Japan.</p>

            </div>
            <div
                class="flex flex-col justify-center items-center gap-4 p-10 bg-slate-800 rounded-xl shadow-lg shadow-emerald-700">
                <div
                    class="flex justify-center bg-emerald-600 px-3 py-2 rounded-full w-16 h-16 items-center shadow-xl shadow-emerald-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="22" y1="12" x2="2" y2="12"></line>
                        <path
                            d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                        </path>
                        <line x1="6" y1="16" x2="6" y2="16"></line>
                        <line x1="10" y1="16" x2="10" y2="16"></line>
                    </svg>
                </div>
                <p class="text-3xl font-bold text-center">Medicine</p>
                <p class="text-xl text-center">suggested medicine from doctors will be available here.you don't need to
                    go elsewhere to purchase .</p>

            </div>
            <div
                class="flex flex-col justify-center items-center gap-4 p-10 bg-slate-800 rounded-xl shadow-lg shadow-blue-700">
                <div
                    class="flex justify-center bg-blue-600 px-3 py-2 rounded-full w-16 h-16 items-center shadow-xl shadow-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21.5 12H16c-.7 2-2 3-4 3s-3.3-1-4-3H2.5" />
                        <path
                            d="M5.5 5.1L2 12v6c0 1.1.9 2 2 2h16a2 2 0 002-2v-6l-3.4-6.9A2 2 0 0016.8 4H7.2a2 2 0 00-1.8 1.1z" />
                    </svg>
                </div>
                <p class="text-3xl font-bold text-center">Home Delivery</p>
                <p class="text-xl text-center">Skincare products and medicine will be delivered through our home
                    delivery system.</p>

            </div>
            <div
                class="flex flex-col justify-center items-center gap-4 p-10 bg-slate-800 rounded-xl shadow-lg shadow-pink-700">
                <div
                    class="flex justify-center bg-pink-600 px-3 py-2 rounded-full w-16 h-16 items-center shadow-xl shadow-pink-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                    </svg>
                </div>
                <p class="text-3xl font-bold text-center">Rewards</p>
                <p class="text-xl text-center">we have rewards for you based on your purchase.so purchase right now</p>

            </div>

        </div>

        <div class="bg-gradient-to-b from-cyan-900 w-full h-full absolute top-0 left-0 z-0"></div>

    </section>
    <div class="bg-black/70">
        <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="grid row-gap-10 mb-8 lg:grid-cols-6">
                <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
                    <div>
                        <p class="font-medium tracking-wide text-gray-300">Category</p>
                        <ul class="mt-2 space-y-2">
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">News</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">World</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Games</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">References</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-medium tracking-wide text-gray-300">Apples</p>
                        <ul class="mt-2 space-y-2">
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Web</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">eCommerce</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Business</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Entertainment</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Portfolio</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-medium tracking-wide text-gray-300">Cherry</p>
                        <ul class="mt-2 space-y-2">
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Media</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Brochure</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Nonprofit</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Educational</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Projects</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-medium tracking-wide text-gray-300">Business</p>
                        <ul class="mt-2 space-y-2">
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Infopreneur</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Personal</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Wiki</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Forum</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:max-w-md lg:col-span-2">
                    <span class="text-base font-medium tracking-wide text-gray-300">Subscribe for updates</span>
                    <form class="flex flex-col mt-4 md:flex-row">
                        <input placeholder="Email" required="" type="text"
                            class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-slate-900 border border-gray-700 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline" />
                        <button type="submit"
                            class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                            Subscribe
                        </button>
                    </form>
                    <p class="mt-4 text-sm text-gray-500">
                        Bacon ipsum dolor amet short ribs pig sausage prosciuto chicken spare ribs salami.
                    </p>
                </div>
            </div>
            <div class="flex flex-col justify-between pt-5 pb-10 border-t border-gray-800 sm:flex-row">
                <p class="text-sm text-gray-500">
                    © Copyright 2020 Lorem Inc. All rights reserved.
                </p>
                <div class="flex items-center mt-4 space-x-4 sm:mt-0">
                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                                d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
                            </path>
                        </svg>
                    </a>
                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
                        <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                            <circle cx="15" cy="15" r="4"></circle>
                            <path
                                d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
                            </path>
                        </svg>
                    </a>
                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                                d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>