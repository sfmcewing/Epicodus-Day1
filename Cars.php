<?php
class Car {

    private $make_model;
    private $price;
    private $miles;

    function __construct($make_model, $price, $miles = 5000) {
    	$this->make_model = $make_model;
    	$this->price = $price;
    	$this->miles = $miles;
    }

    // setters
    function setModel ($modelName) {

    	$this->make_model = $modelName;
    }

    function setPrice ($setPrice) {

    	$this->price = $setPrice;
    }

    function setMiles ($setMiles) {

    	$this->miles = $setMiles;
    }

    // getters
    function getModel() {

    	return $this->make_model;
    }
    function getPrice() {

    	return $this->price;
    }
    function getMiles() {

    	return $this->miles;
    }
}

$batmobile = new Car("Mercedes", 200000);
$pinto = new Car("Ford", 500, 6000);
$flugtag = new Car("Redbull", 50, 3);
$daewoo = new Car("Lanos", 123456);

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
           	$carModel = $car->getModel();
           	$carPrice = $car->getPrice();
           	$carMiles = $car->getMiles();

           	echo "<li> $carModel </li>";
           	echo "<ul>";
           	    echo "<li> $$carPrice </li>";
           	    echo "<li> $carMiles </li>";
           	echo "</ul>";
           }
        ?>
   </ul>
</body>
</html>