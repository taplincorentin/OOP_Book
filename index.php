<?php
    require "Author.php"; require "Book.php";

    $a1 = new Author ("Stephen","King"); //create author instance
    $a2 = new Author ("Pierre","Boule");
    $b1 = new Book ("Ca",$a1,1138,1986); //create book instance
    $b2 = new Book ("La Planète des Singes",$a2,274,1963);
    $b3 = new Book ("Shining",$a1,447,1977);
    //var_dump($a1->get_books());
    //test of author/book classes and toString methods
    echo $a1."<br>".$b1."<br>"; 

    showBibliography($a1);
?>