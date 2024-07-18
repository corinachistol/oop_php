<?

    class Item{
        private Appliance $appliance;
        private int $quantity;
                                                // ref
        public function __construct(Appliance $appliance, int $quantity){

            //copy the product to avoid leaking reference!!!
            //shalow copy
            $applianceCopy = clone $appliance;

            $this->appliance = $applianceCopy;
            $this->quantity = $quantity;
        }

        public function getAppliance(): Appliance {
            return $this->appliance;
        }
        public function getQuantity(): int {
            return $this->quantity;
        }

        public function __set($name, $value) {
            switch ($name) {
                case 'quantity':
                    if($value > 0){
                        $this->quantity = $value; 
                    }else{
                        die('Only positive numbers allowed!');
                    }
                    break;
                case 'appliance':
                    $this->appliance = $value; 
                    break;
                
                default:
                    die("No such property!");
            }
           
        }

    }