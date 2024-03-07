<?php
    //require_once('color.php');
    class Jugador{
        
        private $name;
        private Color $color;
        private $pos;

        //private $pdo;

        public function __construct($nombre, $color){
            $this->name = $nombre;
            $this->color = $color;
            $this->pos = 0;

            /*$dsn = "mysql:host=".DB_HOST.";dbname=".DB_BBDD.";charset=utf8";
            try {
                $this->pdo = new PDO($dsn, DB_USER, DB_PASS);
            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }
            */
        }
        
        public function __destruct(){
            //$this->pdo = null;
        }

        public function mover($numDado){
            $pos += $numDado;
        }

        public function getColor(){   
            return $this->color;
        }

        public function getNombre(){
            return $this->name;
        }
        public function getPosicion(){
            return $this->pos;
        }
    }