<?

     /*abstract*/ class Appliance {
          const ID_MIN = 0;
          const ID_MAX = 1_000_000;
        private int $id;
        private string $name;
        private Money $price;

        public function __construct(int $id, string $name, Money $price) {
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

        public function __set($name, $value): void{

          if($name == 'id'){
               if(!empty($value) && is_int($value) && $value > static::ID_MIN && $value < static::ID_MAX ){
                    $this->id = $value;
                    print "Changed id";
               } else{
                    //HW2: try using sprintf() print string to format
                    die(sprintf("Cannot leave %s empty or id must be in range (%d...%d) " , $name, static::ID_MIN, static::ID_MAX));
               }
          }elseif($name == 'name') {
               if(!empty($value) && is_string($value) && strlen($value) >= 3 ){
                    $this->name = $value;
                    print "Changed name";
               }else{
                    die(sprintf("Cannot leave %s empty", $name ));
               }

          }elseif($name == 'price'){
               if(!empty($value) && $value instanceof Money){
                    $this->price = $value;
                    print("Changed price");
               }else{
                    die(sprintf("Cannot leave %s empty", $name));
               }

          } else{
               die(sprintf("Cannot leave %s empty", $name));
          }
        }

    
     //    public function getId(): int {
     //    	return $this->id;
     //    }
          public function __get($name){
               if ($name == 'id') return $this->id;
               elseif ($name == 'name') return $this->name;
               elseif($name == 'price') return $this->price;
               else die(sprintf("ERROR: Unknown property %s", $name));
               
          }
    }