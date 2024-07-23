<?

//WIDE RANGE OF PRODUCTS
abstract class Product {
    public string $name;
    public int $price; // HW:type Money

    public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
    }
    
}