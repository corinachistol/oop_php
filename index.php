<?

require_once 'src/Appliance.php';
require_once 'src/Money.php';

$price = new Money(9223372036858, "EUR");
$appliance = new Appliance(1, "LG LED",  $price);
var_dump($appliance);


?>







