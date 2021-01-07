<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// We are going to use session variables so we need to enable sessions
session_start();
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
    
}

whatIsHappening();

// define variables and set to empty values
$emailErr = $streetErr = $streetnumberErr = $zipcodeErr = $productsErr ="";
$email= $street = $streetnumber = $zipcode = $products = "";
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $email = "Missing";
    }
    else {
        $email = $_POST["email"];
    }

    if (empty($_POST["street"])) {
        $street = "Missing";
    }
    else {
        $street = $_POST["street"];
        
    }

    if (empty($_POST["streetnumber"]))  {
        $streetnumber = "Missing";
    }
    else {
        $streetnumber = $_POST["streetnumber"];
    }

    if (!isset($_POST["zipcode"])) {
        $zipcode = "Only Number";
    }
    else {
        $zipcode = $_POST["zipcode"];
    }

    if (empty($_POST["products"])) {
        $products = "Missing";
    }
    else {
        $products = $_POST["products"];
    }

   }





function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  


// TODO: provide some products (you may overwrite the example)

$products = [
    ['name' => 'Whiskey Sour', 'price' => 10],
    ['name' => 'Bloody Caesar', 'price' =>9.5],
    ['name' => 'Margarita', 'price' => 9],
    ['name' => 'Sake', 'price' => 8],
    ['name' => 'Ramen From the chef', 'price' => 10.20],
    ['name' => 'Sashimi Salmon', 'price' => 8],
    ['name' => 'California Roll', 'price' => 9],
    ['name' => 'Scallop Roll', 'price' => 10],
    ['name' => 'Spicy Tuna', 'price' => 6],
   
];





$totalValue = 0;

require 'form-view.php';
