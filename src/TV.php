<?

require_once './src/Appliance.php';
class TV extends Appliance{
    private int $diagonal;
    
    public function __construct(int $id, string $name, int $diagonal, Money $price, ){
        //delegate construction
        parent::__construct( $id, $name, $price);
        $this->diagonal = $diagonal;
    }
   

}

?>