<?php
    require_once __DIR__."/jugador.php"; 
    require_once __DIR__."/casilla.php";
    require_once __DIR__."/config.php";
    $jugadores = [];
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_BBDD);
	// Verificar la conexión
	if ($conn->connect_error) {
		die("Conexión fallida: " . $conn->connect_error);
	}
    $sql = "SELECT id, mov FROM ficha ORDER BY coord_y ASC, coord_x ASC";
    $sql_res = $conn -> prepare( $sql );
    $sql_res -> execute();
    $result =  $sql_res -> get_result();
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    $_SESSION["tablero"] = $rows;
    for ($i=1; $i <= 4; $i++) {
        if(isset($_SESSION["jugador".$i])){
            array_push($jugadores, new Jugador($_SESSION["jugador".$i]["nombre"], $_SESSION["jugador".$i]["color"]));
        }
        else
            continue;
    }

    function pintarTablero(){
        $casillas = 0;
        for ($y=1; $y <= 8; $y++) { 
            echo "<tr>";
            for ($x=1; $x <= 8; $x++) { 
                echo "<td id='".($_SESSION['tablero'][$casillas]['id'] - 1)."'>".($_SESSION["tablero"][$casillas]['id'] - 1). "</td>";
                $casillas++;
            }
            echo "</tr>";
        }
    }

    function finalPartida(){

        //session_abort();
    }

    function lanzarDado(){
        return rand(1, 6);
    }