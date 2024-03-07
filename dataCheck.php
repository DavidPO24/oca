<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreJ;
    $colorJ;
    $colores = [];
    $errors = [];
    for ($i=1; $i < 4; $i++) { 
        if (isset($_POST['nombre'.$i]) && isset($_POST['color'.$i])) {
            $nombreJ = trim(htmlspecialchars($_POST['nombre'.$i]));
            $colorJ = trim(htmlspecialchars($_POST['color'.$i]));
            if(!empty($nombreJ) && !empty($colorJ)) {
                if(!in_array($colorJ,$colores)){
                    array_push($colores,$colorJ);
                }else{
                    #Color repetido
                    array_push($errors,"2 jugadores no pueden elegir el mismo color.");
                }
            }else {
                #Existe pero está vacio
                array_push($errors,"Rellena todos los datos");
            }
        }
        #No existe
    }
    if (empty($errors)) {
        header("Location: "); #Envia al tablero
    }
}
