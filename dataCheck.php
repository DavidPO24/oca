<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreJ;
    $colorJ;
    $colores = [];
    $errors = [];
    $listaJ = [];
    for ($i=1; $i <= 4; $i++) { 
        if (isset($_POST['nombre'.$i]) && isset($_POST['color'.$i])) {
            $nombreJ = trim(htmlspecialchars($_POST['nombre'.$i]));
            $colorJ = trim(htmlspecialchars($_POST['color'.$i]));
            if(!empty($nombreJ) && !empty($colorJ)) {
                if(!in_array($colorJ,$colores)){
                    array_push($listaJ, $nombreJ);
                    array_push($colores,$colorJ);
                }else{
                    #Color repetido
                    array_push($errors,"2 jugadores no pueden elegir el mismo color.");
                }
            }else {
                #Existe pero está vacio
                if(!in_array("Rellena todos los datos",$errors)){
                    array_push($errors,"Rellena todos los datos");
                }
            }
        }
        #No existe
    }
    if (empty($errors)) {
        session_start();
        for ($i=1; $i <= 4; $i++) {
            $_SESSION["jugador".$i] = [
                "nombre" => $listaJ[$i - 1],
                "color"=> $colores[$i - 1]
            ];
        }
       
        header("Location: oca.php"); #Envia al tablero
    }
}
