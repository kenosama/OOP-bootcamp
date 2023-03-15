<?php
declare(strict_types=1);
function displayErrors()
{
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
}
displayErrors();
//solution without Classes
// $fruitVat=1.06;
// $alcoholVat=1.1;
// $bananaQuantity=6;
// $bananaPrice=1;
// $totalBananaPrice=($bananaQuantity*$bananaPrice*$fruitVat)+$bananaQuantity*$bananaPrice;
// echo "the price for bananas will be : {$totalBananaPrice} <br>";

// $appleQuantity = 3;
// $applePrice = 1.5;
// $totalApplePrice = ($appleQuantity * $applePrice * $fruitVat)+ $appleQuantity * $applePrice;
// echo "the price for apple will be : {$totalApplePrice} <br>";

// $wineQuantity=2;
// $winePrice=10;
// $totalWinePrice=($alcoholVat*$winePrice*$wineQuantity)+$winePrice*$wineQuantity;
// echo "the price for wine will be : {$totalWinePrice} <br>";

// $basket=$totalApplePrice+$totalBananaPrice+$totalWinePrice;
// echo "the total basket price will be : {$basket}";

require('products.php');
require('basket.php');

$products = [
    new Product("Banana", "Fruit", 6, 1),
    new Product("Apple", "Fruit", 3, 1.5),
    new Product("Wine", "Alcohol", 2, 10),
    new Product("Vodka", "Alcohol", 1, 20),
];

$basket = new Basket();
// Loop through the products and add each one to the basket
foreach ($products as $product) {
    $basket->addProduct($product);
}

$totalPrice = $basket->calculateTotalPrice();
echo "Total price: " . $totalPrice . PHP_EOL;