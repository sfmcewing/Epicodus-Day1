<?php
class Car {

    private $make_model;
    private $price;
    private $miles;
    private $image_path;

    function __construct($make_model, $price, $image_path, $miles = 5000) {
    	$this->make_model = $make_model;
    	$this->price = $price;
    	$this->miles = $miles;
    	$this->image_path = $image_path;
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

    function setImage ($imagePath) {

    	$this->image_path = $imagePath;
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
    function getImage () {

    	return $this->image_path;
    }
}

$batmobile = new Car("Mercedes", 200000, "images/batmobile.jpeg");
$pinto = new Car("Ford", 500, "images/pinto.jpeg", 600);
$flugtag = new Car("Redbull", 50, "images/flugtag.jpeg", 6);
$daewoo = new Car("Lanos", 123456, "images/daewoo lanos.jpeg");

$cars = array($batmobile, $pinto, $flugtag, $daewoo);

//Filter cars by mileage and price
$cars_matching_search = array();
foreach ($cars as $car) {
  $carPrice = $car->getPrice();
  $carMiles = $car->getMiles();

  if ($carMiles < $_GET["miles"] && $carPrice < $_GET["price"]) {
    array_push($cars_matching_search, $car);
  }
}

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
           foreach ($cars_matching_search as $car) {
           	$carModel = $car->getModel();
           	$carPrice = $car->getPrice();
           	$carMiles = $car->getMiles();
           	$carImage = $car->getImage();

            echo "<li> $carModel </li>";
            echo "<ul>";
                echo "<li> $$carPrice </li>";
                echo "<li> $carMiles </li>";
                echo "<li> <img src='$carImage'></li>";
            echo "</ul>";
           }

          if(empty($cars_matching_search)) {

            echo "<li> Ain't nothin' here, yo. Try again!</li>";
          }
              
        ?>
   </ul>
</body>
</html>