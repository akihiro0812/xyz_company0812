<?php
  //All books have 3 things in commong: title, outhor, year
  class Book {

    private $title;
    private $author;
    private $year;

    private $price;
    // public function displayValues() {
    //   echo $this->title;
    //   echo $this->author;
    //   echo $this->year;
    // }

    public function setPrice($book_price) {
      $this->price = $book_price;
    }

    public function setTitle($new_title) {
      $this->title = $new_title;
    }

    // public function setPrice() {
    //   return $this->price;
    // }

    // public function getTitle() {
    //   return $this->title;
    // }


    // public function setAuthor($new_author) {
    //   $this->author = $new_author;
    // }

    // public function setYear($new_year) {
    //   $this->year = $new_year;
    // }

    // public function getAuthor() {
    //   return $this->author;
    // }

    // public function getYear() {
    //   return $this->year;
    // }

    public function displayValues() {
      echo "Book Title: " . $this->title . "<br>";
      echo "Book Price: " . $this->price . "<br>";
      
    //  echo "Author: " . $this->author . "<br>"; 
    //  echo "Year: " . $this->year;
    }
  }
?>