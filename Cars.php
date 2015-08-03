<?php
class Car {

    public $make_model;
    public $price;
    public $miles;

    function __construct($make_model, $price, $miles) {
    	$this->make_model = $make_model;
    	$this->price = $price;
    	$this->miles = $miles;
    }
}

$batmobile = new Car("Mercedes", 200000, 25000);
$pinto = new Car("Ford", 500, 6000);
$flugtag = new Car("Redbull", 50, 3);
$daewoo = new Car("Lanos", 123456, 83373);

$cars = array($batmobile, $pinto, $flugtag, $daewoo);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Your Car Dealership's Homepage</title>
</head>
<body>
   <h1>Your Car Dealership</h1>
   <ul>
        <?php
           foreach ($cars as $car) {
           	echo "<li> $car->make_model </li>";
           	echo "<ul>";
           	    echo "<li> $$car->price </li>";
           	    echo "<li> Miles: $car->miles </li>";
           	echo "</ul>";
           }
        ?>
   </ul>
</body>
</html>