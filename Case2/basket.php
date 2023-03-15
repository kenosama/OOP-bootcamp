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
            
            if ($this->discountFruits===true && $product->getType()==="Fruit"){
                $articlePrice = ($price/2) * (1 + $vat);
            }
            else
            {
                $articlePrice = $price * (1 + $vat);
            }
            echo "The price for the $name, is $articlePrice <br>";
            $totalPrice += $articlePrice;
        }

        return $totalPrice;
    }
}
