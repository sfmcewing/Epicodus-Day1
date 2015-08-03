<?php
   class Parcel {
       private $weight;
       private $length;
       private $width;
       private $carrier;
       private $height;

       function __construct($weight, $length, $width, $height, $carrier){
       	     $this->weight =  (int) $weight;
       	     $this->length = (int) $length;
       	     $this->width = (int) $width;
       	     $this->carrier = $carrier;
       	     $this->height = (int) $height;
       }

       //getters
       function getLength() {
       		return $this->length;
       }

       function getWeight() {
       		return $this->weight;
       }
       
       function getWidth() {
       		return $this->width;
       }

       function getCarrier() {
       		return $this->carrier;
       }
       
       function getHeight() {
       		return $this->height;
       }
       
       //setters
       function setLength($parcel_length) {
             $this->length = $parcel_length;

       }

       function setWeight($parcel_weight) {
       	     $this->weight = $parcel_weight;
       }

       function setWidth($parcel_width) {
       	     $this->width = $parcel_width;
       	
       }

       function setCarrier($carrier) {
       	     $this->carrier = $carrier;
       	
       }

       function setHeight($parcel_height) {
       	     $this->height = $parcel_height;
       }


       // Volume calculator

       function volume() {
       		return (($this->length * $this->width) * $this->height);
       }

       // Calculate the cost to ship

       function costToShip() {
       		return $this->weight * .8;
       }

   }
      $usrPackage = new Parcel($_GET["weight"], $_GET["length"], $_GET["width"], $_GET["height"], $_GET["carrier"]);

?>

<!DOCTYPE html>
<html>
<head>
      <title>Shipping Calculator</title>
</head>
<body>
   <h1>Ship Stuff</h1>
   <ul>
        <?php

            $shippingPrice = $usrPackage->costToShip();
            $packageVolume = $usrPackage->volume();

            echo "<li> Package:</li>";
            echo "<ul>";
                echo "<li> Cost to Ship: $$shippingPrice </li>";
                echo "<li> $packageVolume </li>";
            echo "</ul>";

        ?>
   </ul>
</body>
</html>