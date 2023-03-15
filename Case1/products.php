<?php
class Product 
{
    private string $name;
    private string $type;
    private int $quantity;
    private float $price;

    public function __construct (string $name, string $type, int $quantity, float $price)
    {
    $this->name = $name;
    $this->type = $type;
    $this-> quantity= $quantity;
    $this->price = $price;
    }
    public function getType(): string
    {
        return $this->type;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
$product1= new Product("Banana","Fruit",6,1);
$product2= new Product("Apple","Fruit",3,1.5);
$product3= new Product("Wine","Alcohol",2,10);
