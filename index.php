<?php
    //require "Author.php"; require "Book.php"; => too long to use if i have a lot of classes. 
    //better to use spl_autoload_register function as followed:
    
    spl_autoload_register(function($class_name){
        require 'classes/'.$class_name.'.php';
    });

    $a1 = new Author ("Stephen","King"); //create author instance
    $a2 = new Author ("Pierre","Boule");

    $b1 = new Book ("Ca",$a1,1138,1986,20); //create book instance
    $b2 = new Book ("La Planète des Singes",$a2,274,1963,5.30);
    $b3 = new Book ("Shining",$a1,447,1977,16);

    
    /*test of author/book classes and toString methods
    echo $a1."<br>".$b1."<br>";*/ 

    $a1->showBibliography();
?>