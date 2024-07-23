<?
declare(strict_types=1);


require_once './src/TV.php';
require_once './src/Orange.php';
require_once './src/WashingMachine.php';

require_once './src/Client.php';




$tv = new TV('Lg Extreme 55"', 1000, 55);

$orange = new Orange('Oranges from Ecuador', 10, 1000);

$wm = new WashingMachine('Samsung Purify', 2000, 10);
$client = new Client();
$client->switchOn();

// $tv->switchOn();
// $wm->switchOn();

var_dump($tv);
var_dump($orange);
var_dump($wm);

var_dump($client);




///////////////////////////////////////

