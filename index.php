<?
declare(strict_types=1);


require_once './src/Appliance.php';
require_once './src/TV.php';
require_once './src/DishWasher.php';
require_once './src/Length.php';
require_once './src/Volume.php';
require_once './src/Money.php';

require_once './src/Order.php';
require_once './src/Item.php';



$tv = new TV(
    1000,
    'Lg Extreme 55',
    new \Length\Length(55, \Length\Units::INCH),
    new Money(10000, "MDL")
);


$washer = new DishWasher(
    1001,
    "Smasung DW-1",
    15,
    new \Volume\Volume(100, \volume\Units::LITER),
    new Money(15000, "MDL")
);


// client ordered two items
$order = new Order();
$order->addItem(new Item($tv,2));        // #12
$order->addItem(new Item($washer,1));

$tv->__set('price', new Money(10050, 'MDL'));

// $order->removeItem(0);
$order->changeItemQuantity(1,4);


//go to payment
var_dump($order);
var_dump($tv);  /// #1
























// var_dump($tv);
// var_dump($washer);
