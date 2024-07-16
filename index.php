<?
declare(strict_types=1);


require_once './src/Appliance.php';
require_once './src/TV.php';
require_once './src/DishWasher.php';
require_once './src/Length.php';
require_once './src/Volume.php';
require_once './src/Money.php';

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

var_dump($tv);
var_dump($washer);
