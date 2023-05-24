<?php
    class Author{
        
        //ATTRIBUTES
        private string $_name;
        private string $_fname;
        
        //METHODS

        //construct method
        function __construct(string $name, string $fname){
            $this->_name = $name;
            $this->_fname = $fname;
        }

        //get methods
        function get_name(){
            return $this->_name;
        }

        function get_fname(){
            return $this->_fname;
        }

        
        //set methods
        function set_name($name){
            $this->_name = $name;
        }

        function set_surname($fname){
            $this->_fname = $fname;
        }


        //toString method
        public function __toString(){
            return $this-> get_name()." ".$this-> get_fname(). "<br>";
        }
    }


?>