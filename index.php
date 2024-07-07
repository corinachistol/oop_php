<?

require_once 'src/Appliance.php';
require_once 'src/Money.php';

$price = new Money(-4587845415484848, "EUR");
var_dump($price);
print("<br>");
$appliance = new Appliance(1, "LG LED",   $price);
var_dump($appliance);


?>







