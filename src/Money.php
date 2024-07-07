<?

class Money {
    const CURRENCY_ALLOWED = ["EUR", "USD", "MDL"];
    private int $amount;  # x100 | 1.00$ --> 100
    private string $currency;

    

    function __construct(int $amount, string $currency) {
    	$this->setAmount($amount);
        $this->setCurrency($currency);
    
    }

    //HW4: limit to the max and min of integer -done
    public function setAmount(int $amount) :void {
        if($amount >= PHP_INT_MAX || $amount <= PHP_INT_MIN ){
            die(sprintf("Please enter a number between range [%d...%d]", PHP_INT_MIN, PHP_INT_MAX));
        }
        $this->amount = $amount;
    }
    public function getAmount() :int {
        return $this->amount;
    }

    // HW5: allow only EUR, USD, MDL - done
    public function setCurrency(string $currency) :void {
        if(in_array($currency, static::CURRENCY_ALLOWED, false)){
            print("I found the {$currency}");
            $this->currency = $currency;
        }else{
            die("Only EUR, USD, MDL currencies are allowed!");
        }
    }
    
    public function getCurrency() :string {
        return $this->currency;
    }
}