<?php
    class Book{

        //ATTRIBUTES
        private string $_title;
        private Author $_author; 
        private int $_nbPages;
        private int $_pYear;



        //METHODS

        //construct method
        function __construct(string $title, Author $author, int $nbPages, int $pYear){
            $this->_title = $title;
            $this->_author = $author;
            $this->_nbPages = $nbPages;
            $this->_pYear = $pYear;
            $this->_author->addBook($this);
        }

        //get methods
        function get_title(){
            return $this -> _title;
        }
        function get_author(){
            return $this -> _author;
        }
        function get_nbPages(){
            return $this -> _nbPages;
        }
        function get_pYear(){
            return $this -> _pYear;
        }

        //set methods
        function set_title($title){
            $this ->_title = $title;
        }
        function set_author($author){
            $this ->_author = $author;
        }
        function set_nbPages($nbPages){
            $this ->_nbPages = $nbPages;
        }
        function set_pYear($pYear){
            $this ->_pYear = $pYear;
        }
        
        
        //toString method
        public function __toString(){
            return $this->get_title()." est un livre écrit par ".$this->get_author().", il a ".$this->get_nbPages()." pages et a été publié en ".$this->get_pYear();
        }

        
        
    }
?>