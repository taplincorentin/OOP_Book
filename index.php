<?php
    require "Author.php"; require "Book.php";

    $a1 = new Author ("Stephen","King"); //create author instance
    $b1 = new Book ("Ca",$a1,1138,1986); //create book instance
    var_dump($a1->get_books());
    //test of author/book classes and toString methods
    echo $a1."<br>".$b1."<br>"; 

?>