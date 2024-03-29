<?php
    enum color{
        case Rojo;
        case Azul;
        case Amarillo;
        case Verde;

        public static function getRGB($color){
            return match($color){
                Color::Rojo => "#FF0000",
                Color::Verde => "#00FF00",
                Color::Amarillo => "#FFFF00",
                Color::Azul => "#0000FF",
           };
        }

        public static function getString($color){   
            return match($color){
                Color::Rojo => "Rojo",
                Color::Verde => "Verde",
                Color::Amarillo =>"Amarillo",
                Color::Azul => "Azul",
           };
        }

        public static function getColorEnum($color){   
            return match($color){
                "Rojo"=> Color::Rojo,
                "Verde"=> Color::Verde,
                "Amarillo"=> Color::Amarillo,
                "Azul"=> Color::Azul,
           };
        }
    }

    
