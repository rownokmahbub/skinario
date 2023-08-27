<?php
include("./dbconf.php");
authorize();
if(isset($_POST['submit']))
{
    $address = $_POST['address'];
    $number = $_POST['number'];
    $delivery_type = $_POST['delivery_type'];
    $payment_type = $_POST['payment_type'];
    $total = $_GET['total'];
    $userId = $_SESSION['userId'];
    $products = $_SESSION['cart'];
    $id = mysqli_fetch_array(mysqli_query($con, "SELECT id FROM payment ORDER BY id DESC LIMIT 1"))['id'] ;
    $id = $id ? $id + 1 : 1;
    $query = "INSERT INTO payment(id, address, number, delivery_type, payment_type, user_id, price) values ($id,'$address', '$number', '$delivery_type', '$payment_type', '$userId', '$total')";
    mysqli_query($con, $query);

    foreach ($products as $key => $value) {
        $quantity = $value['quantity'];
        $price = $value['price'];
        $query = "INSERT INTO `order`(user_id, product_id, quantity, price, payment_id) VALUES ($userId, $key, '$quantity', '$price', $id)";
        mysqli_query($con, $query);
    }
    unset($_SESSION['cart']);
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="night">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Skinario</title>
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@3.6.1/dist/full.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
  <div class=" mx-auto  relative z-50">


    <nav class="bg-cyan-900 sticky top-0 left-0 w-full text-lg font-semibold">
      <div class="container flex flex-wrap items-center justify-between mx-auto py-8">
        <a href="index.html" class="flex items-center">

          <span class="self-center text-2xl font-bold whitespace-nowrap text-white italic">Skinario.</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
          <ul class="font-medium flex flex-col items-center p-4 md:p-0 mt-4 border rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0  border-gray-700">
            <li>
              <a href="index.php" class="block py-2 pl-3 pr-4  bg-cyan-500 rounded md:bg-transparent md:p-0 text-white md:text-cyan-500" aria-current="page">Home</a>
            </li>
            <li>
              <a href="about.php" class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100  md:border-0  md:p-0 text-white md:hover:text-cyan-500  hover:text-white md:hover:bg-transparent">About</a>
            </li>

            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0 items-center">

              <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-cyan-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-cyan-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Services <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    <li>
                      <a href="product.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Product</a>
                    </li>

                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Medicine</a>
                    </li>
                  </ul>


                  <li>
                    <a href="doctor.php" class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100  md:border-0  md:p-0 text-white md:hover:text-cyan-500  hover:text-white md:hover:bg-transparent">Doctor</a>
                  </li>
                  <li>
                    <a href="Rewards.php" class="block py-2 pl-3 pr-4  rounded hover:bg-gray-100  md:border-0  md:p-0 text-white md:hover:text-cyan-500  hover:text-white md:hover:bg-transparent">Rewards</a>
                  </li>
                  <li>
                    <a href="addcart.php" class="flex group cursor-pointer justify-center items-center gap-2 relative py-2 pl-3 pr-4  rounded hover:bg-gray-100  md:border-0  md:p-0  hover:text-white md:hover:bg-transparent"><svg class="text-white group-hover:text-cyan-500 " xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="10" cy="20.5" r="1"/><circle cx="18" cy="20.5" r="1"/><path d="M2.5 2.5h3l2.7 12.4a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6l1.6-8.4H7.1"/></svg>
                      <p class="absolute -top-4 -right-4 bg-primary flex justify-center items-center p-2 text-xs rounded-full w-5 h-5 text-white"><?= $cartItems  ?></p>
                    </a>
                  </li>
                    <?php
                    if(isAuth())
                    {
                        ?>
                        <li>
                            <a href="profile.php" class="btn btn-sm btn-primary capitalize">Profile</a>
                        </li>
                        <?php
                    }else{
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
    <section
      class="bg-cyan-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]"
    >
      <div class="flex min-h-screen justify-center items-center">
        <div
          class="flex bg-cyan-800 shadow-2xl rounded-xl flex-col justify-center items-center px-6 py-12 lg:px-8"
        >
          <div
            class="sm:mx-auto sm:w-full sm:max-w-sm z-10 flex flex-col justify-center items-center"
          >
            <a href="index.php" class="text-2xl font-semibold text-center"
              >Skinario.</a
            >
            <h2
              class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white capitalize"
            >
              Pay Your Payment here
            </h2>
          </div>

          <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm z-10">
            <form
              class="space-y-6 flex flex-col container mx-auto"
              action="#"
              method="POST"
            >
              <div>
                <label
                  for="name"
                  class="block text-sm font-medium leading-6 text-white"
                  >Your Address</label
                >
                <div class="mt-2">
                  <input
                    id="email"
                    name="address"
                    type="text"
                    autocomplete="email"
                    required
                    class="block bg-slate-700 w-full rounded-xl border-0 py-1.5 text-white ring-1 ring-inset ring-gray-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 shadow-xl md:w-[400px]"
                  />
                </div>
              </div>

              <div>
                <label
                  for="email"
                  class="block text-sm font-medium leading-6 text-white"
                  >Your Number</label
                >
                <div class="mt-2">
                  <input
                    id="email"
                    name="number"
                    type="text"
                    autocomplete="email"
                    required
                    class="block bg-slate-700 w-full rounded-xl border-0 py-1.5 text-white ring-1 ring-inset ring-gray-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 shadow-xl md:w-[400px]"
                  />
                </div>
              </div>

              <label
                for="countries"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Select an option</label
              >
              <select
                id="countries"
                name="delivery_type"
                class="rounded-xl border block w-full p-2 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 md:w-[400px]"
              >
                <option selected>Delivery Type</option>
                <option value="pathao">Pathao Delivery</option>
                <option value="cod">Cash on Delivery</option>
              </select>
              <label
                for="countries"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Select an option</label
              >
              <select
                id="countries"
                name="payment_type"
                class="rounded-xl border block w-full p-2 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 md:w-[400px]"
              >
                <option selected>Payment Type</option>
                <option value="bkash">Bekash</option>
                <option value="nagad">Nogod</option>
                <option value="rocket">Rocket</option>
              </select>
              <div>
                <button
                  type="submit"
                  name="submit"
                  class="flex w-full justify-center rounded-xl bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >
                  Complete Order
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div
        class="bg-gradient-to-b from-blue-900 w-full h-full absolute top-0 left-0 z-0"
      ></div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  </body>
</html>
