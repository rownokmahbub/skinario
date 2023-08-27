<?php
 session_start();
 $con = mysqli_connect('localhost', 'root', '', 'skinario');
$cartItems = 0;
if($_SESSION['cart']) {
    $cartItems = count($_SESSION['cart']);
}

 function isAuth()
 {
     if(isset($_SESSION['auth']) && $_SESSION['auth'])
     {
         return true;
     }
     return false;
 }

 function authorize()
 {
     if(!isset($_SESSION['auth']) && !$_SESSION['auth'])
     {
         header('location: signin.php');
     }
 }