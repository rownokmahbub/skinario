<?php
include("./dbconf.php");
$items = $_SESSION['cart'];

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  unset($_SESSION['cart'][$id]);
  header('location: addcart.php');
}

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
                <a href="index.html" class="flex items-center">

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
                        class="font-medium flex flex-col items-center p-4 md:p-0 mt-4 border rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0  border-gray-700">
                        <li>
                            <a href="index.php"
                                class="block py-2 pl-3 pr-4  bg-cyan-500 rounded md:bg-transparent md:p-0 text-white md:text-cyan-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="about.php"
                                class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100  md:border-0  md:p-0 text-white md:hover:text-cyan-500  hover:text-white md:hover:bg-transparent">About</a>
                        </li>

                        <ul
                            class="flex flex-col font-medium p-4 md:p-0 mt-4 border rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0 items-center">

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
                                        <?= $cartItems  ?></p>
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

    <div class="relative z-10">



        <div class="flex justify-center items-center w-full min-h-screen container mx-auto">

            <div class="pointer-events-auto w-screen ">
                <div class="flex h-full flex-col overflow-y-scroll bg-slate-700 text-white shadow-xl">
                    <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6 text-white">
                        <div class="flex items-start justify-between">
                            <h2 class="text-lg font-medium text-white" id="slide-over-title">Shopping cart</h2>

                        </div>

                        <div class="mt-8">
                            <div class="flow-root">
                                <ul role="list" class="-my-6 divide-y divide-gray-500">
                                    <?php
                  $total = 0;
                  foreach ($items as $key => $value) {
                    $total += $value['price'];
                    $img = $value['image']
                  ?>
                                    <li class="flex py-6">
                                        <div
                                            class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                            <img src="<?= $img ?>"
                                                alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                                class="h-full w-full object-cover object-center">
                                        </div>

                                        <div class="ml-4 flex flex-1 flex-col">
                                            <div>
                                                <div class="flex justify-between text-base font-medium text-white">
                                                    <h3>
                                                        <a href="#"><?= $value['name'] ?></a>
                                                    </h3>
                                                    <p class="ml-4">$<?= $value['price'] ?></p>
                                                </div>
                                            </div>
                                            <div class="flex flex-1 items-end justify-between text-sm">
                                                <p class="text-gray-200">Qty <?= $value['quantity'] ?></p>

                                                <div class="flex">
                                                    <a type="button" href="addcart.php?id=<?= $key ?>"
                                                        class="font-medium text-red-600 hover:text-red-500">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                  }
                  ?>


                                    <!-- More products... -->
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-500 px-4 py-6 sm:px-6">
                        <div class="flex justify-between text-base font-medium text-white">
                            <p>Subtotal</p>
                            <p><?= $total ?></p>
                        </div>
                        <p class="mt-0.5 text-sm text-gray-200">Shipping and taxes calculated at checkout.</p>
                        <div class="mt-6">
                            <a href="delivery.php?total=<?= $total ?>"
                                class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
                        </div>
                        <div class="mt-6 flex justify-center text-center text-sm text-gray-200">
                            <p>
                                or
                                <a href="index.php" type="button"
                                    class="font-medium text-indigo-600 hover:text-indigo-500">
                                    Continue Shopping
                                    <span aria-hidden="true"> &rarr;</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>