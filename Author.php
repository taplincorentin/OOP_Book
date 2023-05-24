<?php
    class Author{
        
        //ATTRIBUTES
        private string $_Fname;
        private string $_name;
                
        //METHODS

        //construct method
        function __construct(string $Fname, string $name){
            $this->_name = $name;
            $this->_Fname = $Fname;
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

        function set_surname($Fname){
            $this->_Fname = $Fname;
        }


        //toString method
        public function __toString(){
            return $this-> get_Fname()." ".$this-> get_name();
        }
    }


?>