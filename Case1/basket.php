<?php
class Basket    // Define Basket class
{
    private array $products = [];    // Define products array
    private float $fruitVat = 0.06; // 6% VAT for fruits    // Define fruitVat float variable
    private float $alcoholVat = 0.21; // 10% VAT for alcohol    // Define alcoholVat float variable

    public function addProduct(Product $product): void    // Define addProduct() method
    {
        $this->products[] = $product;    // Add product to products array
    }

    public function calculateTotalPrice(): float
    {
        $totalPrice = 0;
        $articlePrice = 0;

        foreach ($this->products as $product) {    // Iterate through all the products
            $price = $product->getPrice() * $product->getQuantity();
            $name = $product->getName();

            if ($product->getType() === "Fruit") {    // Check if the product is Fruit
                $vat = $this->fruitVat;
            } else {
                $vat = $this->alcoholVat;
            }

            $articlePrice = $price * (1 + $vat);    // Calculate article price
            echo "The price for the $name, is $articlePrice <br>";
            $totalPrice += $articlePrice;    // Add article price to total price
        }

        return $totalPrice;    // Return the total price
    }
}
