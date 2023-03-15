<?php
class Basket
{
    private array $products = [];
    private float $fruitVat = 0.06; // 6% VAT for fruits
    private float $alcoholVat = 0.21; // 10% VAT for alcohol

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function calculateTotalPrice(): float
    {
        $totalPrice = 0;
        $articlePrice = 0;

        foreach ($this->products as $product) {
            $price = $product->getPrice() * $product->getQuantity();
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
