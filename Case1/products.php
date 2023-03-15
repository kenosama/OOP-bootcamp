<?php    // Indicate start of PHP code
class Product    // Declaring class Product
{
    private string $name;    // private string variable name
    private string $type;    // private string variable type
    private int $quantity;    // private int variable quantity
    private float $price;    // private float variable price

    public function __construct (string $name, string $type, int $quantity, float $price)    // Create constructor for class Product
    {
    $this->name = $name;    // assign value of name to member variable name
    $this->type = $type;    // assign value of type to member variable type
    $this-> quantity= $quantity;    // assign value of quantity to member variable quantity
    $this->price = $price;    // assign value of price to member variable price
    }
    public function getType(): string    // Function to get type of product
    {
        return $this->type;
    }

    public function getQuantity(): int    // Function to get quantity of product
    {
        return $this->quantity;
    }

    public function getPrice(): float    // Function to get price of product
    {
        return $this->price;
    }
    public function getName(): string    // Function to get name of product
    {
        return $this->name;
    }
}


