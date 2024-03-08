<?php
    
    class Casilla{
        private $num;
        private $coord_x;
        private $coord_y;
        private $avance;

        public  function __construct($n, $x, $y, $a){
            $this->num = $n;
            $this->coord_x = $x;
            $this->coord_y = $y;
            $this->avance = $a;
        }
    }