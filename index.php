<?php
    require "Author.php"; require "Book.php";
    $a1 = new Author ("Stephen","King");
    echo $a1 , "<br>";
    $b1 = new Book ("Ca",$a1,1138,1986);
    echo $b1 , "<br>";

?>