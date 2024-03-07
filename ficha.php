<?php
    class Ficha{
        private $num;
        private bool $oca;

        public  function __construct($n,bool $o){
            $this->num = $n;
            $this->oca = $o;
        }
    }