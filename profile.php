<?php
include("./dbconf.php");
authorize();
$userId = $_SESSION['userId'];
$query = "SELECT appointment.*, d.name AS dname, d.institution FROM appointment join doctors d on d.id = appointment.doctor_id where appointment.user_id = $userId";
$result = mysqli_query($con, $query);

$query = "SELECT * FROM payment WHERE user_id=$userId";
$payments = mysqli_query($con, $query);
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
                                class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100  md:border-0  md:p-0 text-white md:hover:text-cyan-500  hover:text-white md:hover:bg-transparent"
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

    <section class="bg-slate-900  bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div class="py-8 px-4 mx-auto flex flex-col justify-center items-center text-center lg:py-16 z-10 relative">

            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight md:text-5xl lg:text-6xl text-white capitalize leading-10">
                Hello Sir/Ma'm<br> Welcome to Dashboard</h1>
            <h1 class="mb-4 text-xl font-extrabold tracking-tight  text-white capitalize leading-10">here you can see
                all your details</h1>


            <a class="btn btn-error font-semibold capitalize" href="logout.php">Logout</a>


            <!-- product listing -->

            <p class="text-4xl font-bold mt-10">Your Product Purchase History</p>

            <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 my-10 px-5 md:px-0 gap-6 ">

                <?php
                while ($row = mysqli_fetch_array($payments)) {
                ?>
                <div class="w-full max-w-sm border px-5 py-5 rounded-lg shadow bg-slate-800 border-gray-700 relative">


                    <div class="px-5 pb-5">
                        <div class="">



                            <div class="flex text-xl font-semibold justify-between items-center">
                                <p>Payment Price</p>
                                <p><?= $row['price'] ?></p>
                            </div>
                            <div class="flex justify-between items-center">
                                <p>Address</p>
                                <p><?= $row['address'] ?></p>
                            </div>


                            <div class="flex justify-between items-center">
                                <p>Delivery Type</p>
                                <p><?= ucfirst($row['delivery_type']) ?></p>
                            </div>
                            <div class="flex justify-between items-center">
                                <p>Payment Type</p>
                                <p><?= ucfirst($row['payment_type']) ?></p>
                            </div>


                        </div>



                    </div>
                </div>
                <?php
                }

                ?>





            </div>
            <p class="text-4xl font-bold mt-3">Your Appointment History</p>

            <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 my-10 px-5 md:px-0 gap-6 ">

                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="w-full max-w-sm border px-5 py-5 rounded-lg shadow bg-slate-800 border-gray-700 relative">


                    <div class="px-5 pb-5">
                        <div class="">

                            <h5 class="text-2xl font-semibold tracking-tight text-white capitalize"><?= $row['dname'] ?>
                            </h5>
                            <h5 class="text-md font-normal tracking-tight text-white capitalize mb-4">
                                <?= $row['institution'] ?></h5>
                            <div class="flex justify-between items-center">
                                <p>Appointment Date</p>
                                <p><?= $row['date'] ?></p>
                            </div>
                            <div class="flex justify-between items-center">
                                <p>Appointment Time</p>
                                <p><?= $row['time'] ?></p>
                            </div>
                            <div class="flex justify-between items-center">
                                <p>Appointment Type</p>
                                <p><?= ucfirst($row['type']) ?></p>
                            </div>

                        </div>



                    </div>
                </div>
                <?php
                }

                ?>





            </div>

        </div>



        <div class="bg-gradient-to-b from-cyan-900 w-full h-full absolute top-0 left-0 z-0"></div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>