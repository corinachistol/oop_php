<?
require_once './src/Product.php';
require_once './src/SwitchableInterface.php';


class WashingMachine extends Product implements SwitchableInterface {
    public int $volume;
    private bool $status;
  

    public function __construct(string $name, int $price, $volume){
        parent::__construct($name, $price);
        $this->volume = $volume;
        $this->status = false;
        
    }

    public function turnOn(): void {
        $this->status = true;
    }
    public function turnOff(): void {
        $this->status = false;
    }
    public function isOn(): bool {
        return $this->status;
    }
    
}