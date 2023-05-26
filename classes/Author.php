<?php
    class Author{
        
        //ATTRIBUTES
        private string $_fName;
        private string $_name;
        private array $_books;
                
        //METHODS

        //construct method
        function __construct(string $fName, string $name){
            $this->_name = $name;
            $this->_fName = $fName;
            $this->_books = [];
        }

        //get methods
        function get_name(){
            return $this->_name;
        }

        function get_fName(){
            return $this->_fName;
        }


        //set methods
        function set_name($name){
            $this->_name = $name;
        }

        function set_fName($fName){
            $this->_fName = $fName;
        }
        function set_books($books){
            $this->_books = $books;
        }
        function get_books(){
            return $this->_books ;
        }


        //toString method
        public function __toString(){
            return $this-> get_fName()." ".$this-> get_name();
        }

        //add book to author
        function addBook(Book $book){
            $this->_books []= $book;
        }

        function showBibliography(){
            $books = $this->get_books();
            foreach($books as $value){
                echo $value->get_title(),"(".$value->get_pYear().")"." : ".$value->get_nbPages()." pages"."<br>";            
            }
        }
        
    }


?>