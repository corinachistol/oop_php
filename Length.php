<?
    //author:developerrX
    class Length {
        public $value;
        private $unit;

        public function __construct($value, $unit) {
            $this->setUnit($unit);
            $this->setValue($value);
           
        }

        public function getUnit() {
            return $this->unit;
        }

        public function getValue(){
            return $this->value;
        }

        public function setUnit($unit) {
            if (in_array($unit, ["%", "px", "vh", "vw", "rem", "em"])) {
                $this->unit = $unit;
            } else {
                die("ERROR:Wrong unit value!!!");
            }
        }

        public function setValue($value) {
            if ($value > 0 && is_integer($value)){
                $this->value = $value;
            }else{
                die("ERROR: Only positive integers allowed!!!");
            }
        }

    }
?>


<?
//developer: misterY
                                
    $width  = new Length(100, "%");
    $height = new Length(70, "%");

    $width->setUnit("rem");
    $width->setValue(22);
    

    print($width->getValue());
    print($width->getUnit());

    // var_dump($width);
    // var_dump($height);
?>