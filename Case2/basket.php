<?php
class Basket
{
    private array $products = [];
    private float $fruitVat = 0.06; // 6% VAT for fruits
    private float $alcoholVat = 0.21; // 10% VAT for alcohol
    private bool $discountFruits=false;

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }
    public function setDiscountFruit($value):void{
        $this->discountFruits= $value;
    }
    private function applyDiscount(Product $product, float $price): float
    {
        if ($this->discountFruits === true && $product->getType() === "Fruit") {
            return $price / 2;
        }
        return $price;
    }

    public function calculateTotalPrice(): float
    {
        $totalPrice = 0;

        foreach ($this->products as $product) {
            $price = $product->getPrice() * $product->getQuantity();
            $price = $this->applyDiscount($product, $price);
            $name = $product->getName();

            if ($product->getType() === "Fruit") {
                $vat = $this->fruitVat;
            } else {
                $vat = $this->alcoholVat;
            }

            $articlePrice = $price * (1 + $vat);
            echo "The price for the $name, is $articlePrice <br>";
            $totalPrice += $articlePrice;
        }

        return $totalPrice;
    }
}
