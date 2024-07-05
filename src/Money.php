<?

class Money {
    private int $amount;  # x100 | 1.00$ --> 100
    private string $currency;

    

    function __construct(int $amount, string $currency) {
    	$this->setAmount($amount);
        $this->setCurrency($currency);
    
    }

    //HW4: limit to the max and min of integer -done
    public function setAmount(int $amount) :void {
        if($amount >= PHP_INT_MAX || $amount <= PHP_INT_MIN ){
            die("Please enter a number between range [".PHP_INT_MIN."...".PHP_INT_MAX."]");
        }
        $this->amount = $amount;
    }
    public function getAmount() :int {
        return $this->amount;
    }

    // HW5: allow only EUR, USD, MDL 
    public function setCurrency(string $currency) :void {
        $this->currency = $currency;
    }
    
    public function getCurrency() :string {
        return $this->currency;
    }
}