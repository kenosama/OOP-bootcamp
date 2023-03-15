<?php
declare(strict_types=1);
function displayErrors()
{
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
}
displayErrors();


require('products.php');
require('basket.php');

$products = [
    new Product("Banana", "Fruit", 6, 1),
    new Product("Apple", "Fruit", 3, 1.5),
    // new Product("Wine", "Alcohol", 2, 10),
    // new Product("Vodka", "Alcohol", 6, 20),
];

$basket = new Basket();
$basket->setDiscountFruit(true);
// Loop through the products and add each one to the basket
foreach ($products as $product) {
    $basket->addProduct($product);
}

$totalPrice = $basket->calculateTotalPrice();
echo "Total price: " . $totalPrice . PHP_EOL;