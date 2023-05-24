<?php
    class Author{
        
        //ATTRIBUTES
        private string $_Fname;
        private string $_name;
        private array $_books;
                
        //METHODS

        //construct method
        function __construct(string $Fname, string $name){
            $this->_name = $name;
            $this->_Fname = $Fname;
            $this->_books = [];
        }

        //get methods
        function get_name(){
            return $this->_name;
        }

        function get_Fname(){
            return $this->_Fname;
        }


        //set methods
        function set_name($name){
            $this->_name = $name;
        }

        function set_Fname($Fname){
            $this->_Fname = $Fname;
        }
        function set_books($books){
            $this->_books = $books;
        }
        function get_books(){
            return $this->_books ;
        }


        //toString method
        public function __toString(){
            return $this-> get_Fname()." ".$this-> get_name();
        }

        //add book to author
        function addBook(Book $book){
            $this->_books []= $book;
        }

        function showBibliography(Author $author){
            $books = $author->get_books();
            foreach($books as $value){
                echo $value;            
            }
        }
        
    }


?>