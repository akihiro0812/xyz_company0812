<?php
  //All books have 3 things in commong: title, outhor, year
  class Fare {

    private $age;
    private $distance;
    private $fare;

    private $price;

    public function setAge($input_age) {
      $this->age = $input_age;
    }

    public function setDistance($input_distance) {
      $this->distance = $input_distance;
    }

    public function getCalc($age, $distance) {
      if($age >= 60 && $distance >= 4) {
        $this->fare = (8 + $distance) * 0.8;
      } else if($age < 60 && $distance >= 4) {
        $this->fare = 8 + $distance;
      } else if($age >= 60 && $distance < 4) {
        $this->fare = 8 * 0.8;
      }
      else {
        $this->fare = 8;
      }
      return $this->fare;
    }

    public function displayValues() {
      echo "Age: " . $this->age . "years old<br>";
      echo "Distance: " . $this->distance . "km<br>";
      echo "Fare: " . $this->fare . "<br>";
      
    //  echo "Author: " . $this->author . "<br>"; 
    //  echo "Year: " . $this->year;
    }
  }
?>