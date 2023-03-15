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
    public function getName(): string
    {
        return $this->name;
    }
}

