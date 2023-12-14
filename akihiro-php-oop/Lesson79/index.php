<?php
  include 'fare.php';
?>

<form action="" method="post">
    <label for="">Age</label>
    <input type="text" name="age" placeholder="Age">

    <br>

    <label for="">Distance</label>
    <input type="text" name="distance" placeholder="Distance(km)">

    <input type="submit" value="submit" name="btn">
  </form>

  <?php

  if(isset($_POST['btn'])) {
    $age = $_POST['age'];
    $distance = $_POST["distance"];

    $fare = new Fare();

    $fare->setAge($age);
    $fare->setDistance($distance);
    $fare->getCalc($age, $distance);

    $fare->displayValues();
  }

?>
