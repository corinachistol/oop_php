<?
require_once './src/Product.php';
require_once './src/SwitchableInterface.php';



class TV extends Product implements SwitchableInterface{ 
    public int $diagonal;
    private string $status;
  

    public function __construct(string $name, int $price, int $diagonal){
        parent::__construct($name, $price);
        $this->diagonal = $diagonal;
        $this->status = "off";
        
    }

    public function turnOn(): void {
        $this->status = "on";
    }
    public function turnOff(): void {
        $this->status = "off";
    }
    public function standBy(): void {
        $this->status = "stabBy";

    }
    public function isOn(): bool {
        return $this->status == "on";
    }

    //needs validation 
  
}