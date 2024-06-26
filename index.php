<?


        abstract class Item{
                public $name;
                public $image;
                public $price;

                function __construct($name, $image, $price) {
                        $this->name = $name;
                        $this->image = $image;
                        $this->price = $price;  
                }
        }

    class Food extends Item {
        public $weight;
     
        function __construct($name,$image,$price,$weight) {
                parent::__construct($name,$image,$price);
                $this->weight = $weight;
        
        }
      

        /**
         * @return string
         */
        public function __toString() {
        	return "<p>Food({$this->weight}g): {$this->name}: {$this->price}</p>";
        }
    }



    class Drink extends Item {

        public $volume;
     
        function __construct($name,$image,$price,$volume) {
                parent::__construct($name,$image,$price);
                $this->volume = $volume;
        
        }
      

        /**
         * @return string
         */
        public function __toString() {
        	return "<p>Drink({$this->volume}ml): {$this->name}: {$this->price}</p>";
        }
    }



  

?>

<!-- 
        ##############################################
 -->

 <?
 
 $food1 = new Food("Salad", "images/salad.png",100, 1000);
 print($food1);

 $drink1 = new Drink("Juice", "images/juice.png",75, 250);
 print($drink1);


 ?>

