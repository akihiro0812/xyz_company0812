<?php
  include 'Book.php';

?>



  <form action="" method="post">
    <label for="">Book Name</label>
    <input type="text" name="book_name">

    <br>

    <label for="">Price</label>
    <input type="text" name="book_price">

    <input type="submit" value="submit" name="btn">
  </form>

<?php

  if(isset($_POST['btn'])) {
    $book_name = $_POST['book_name'];
    $book_price = $_POST['book_price'];

    $book3 = new Book();

    $book3->setTitle($book_name);
    $book3->setPrice($book_price);

    $book3->displayValues();
  }



    // Instantiating
  $book1 = new Book();

  // setting the value of the objects property
  // $book1->setTitle("Detective of Kin Daichi");
  // $book1->setAuthor("Fumiya Sato");
  // $book1->setYear(1996);

  //creating another object
  $book2 = new Book();

  // $book2->setTitle("Harry Potter");
  // $book2->setAuthor("J.K Rowling");
  // $book2->setYear(2010);

  // echo "<h1>" . $book1->displayValues() . "</h1>";
  // echo "<h1>" . $book2->displayValues() . "</h1>";


?>