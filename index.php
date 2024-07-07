<?

// require_once 'src/Appliance.php';
// require_once 'src/Money.php';
// require_once 'src/TV.php';


// $tv = new TV(1, "Samsung", 75, new Money(1000_00, "EUR"));
// var_dump($tv);

require_once 'src/Length.php';

    $diagonal = new Length(75, Units::INCH);
    var_dump($diagonal);

    print(Units::INCH);

?>







