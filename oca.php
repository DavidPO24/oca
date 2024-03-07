<?php
    class Oca{
        private array $casillas;

        public function __construct(){
            for($i = 0; $i < 63; $i ++){
                $this->casillas.array_push(new Ficha(i,false));
            }
        }
    }