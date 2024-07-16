<?

require_once './src/Appliance.php';

class DishWasher extends Appliance{
    private int $programsCount;

    private \Volume\Volume $volume;

    public function __construct(
        int $id, 
        string $name, 
        int $programsCount,
        \Volume\Volume $volume,
        Money $price
    ) {
        parent::__construct($id, $name, $price);
        $this->programsCount = $programsCount;
        $this->volume = $volume;
    }

}