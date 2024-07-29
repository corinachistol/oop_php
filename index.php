<?
declare(strict_types=1);


require_once './src/TV.php';
require_once './src/WashingMachine.php';
require_once './src/Orange.php';




$tv = new TV('Lg Extreme 55"', 1000, 55);
$wm = new WashingMachine('Samsung Purify', 2000, 10);
// $orange = new Orange("Orange", 100,1000);

function turnonDevice(SwitchableInterface $device) {
    $device->turnOn();
}

turnonDevice($tv);
turnonDevice($wm);

// $tv->turnOn();
$wm->turnOn();

var_dump($tv);
var_dump($wm);


///////////////////////////////////////

