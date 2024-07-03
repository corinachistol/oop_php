<?

     /*abstract*/ class Appliance {
        private int $id;
        private string $name;
        private float $price;

        public function __construct(int $id, string $name, float $price) {
        	$this->__set("id",$id);
        	$this->__set("name", $name);
        	$this->__set("price", $price);
        
        }

        # HW 1: refactor code usinf magic methods __set() __get()
     //    public function setId(int $id): void {
     //      if($id > 0 && $id < 1_000_000) {
     //           $this->id = $id;
     //      }else{
     //           print('ERROR: ID must be in rande [1-1_000_000]');
     //      }
     //    }

        public function __set($name, $value){
          if($name == 'id'){
               if(!empty($value) && is_int($value) && $value > 0){
                    $this->id = $value;
                    print("Changed id");
               } else{
                    die("Cannot leave {$name} empty or negative number");
               }
          }elseif($name == 'name') {
               if(!empty($value) && is_string($value)){
                    $this->name = $value;
                    print("Changed name");
               }else{
                    die("Cannot leave {$name} empty");
               }

          }elseif($name == 'price'){
               if(!empty($value) && is_float($value)){
                    $this->price = $value;
                    print("Changed price");
               }else{
                    die("Cannot leave {$name} empty");
               }

          } else{
               die("ERROR: Unknown property {$name}");
          }
        }

    
     //    public function getId(): int {
     //    	return $this->id;
     //    }
          public function __get($name){
               if ($name == 'id') return $this->id;
               elseif ($name == 'name') return $this->name;
               elseif($name == 'price') return $this->price;
               else die("ERROR: Unknown property {$name}");
               
          }
    }