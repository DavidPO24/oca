<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego Oca</title>
</head>
<body>
    <form action="index.php">
        <!--<p>N&uacute;mero de jugadores: 
            <input type="number" id= "jugadores" min="2" max="4"/>
        </p>-->
        <div id= "jugadores">
            <h2>Elige jugadores para comenzar</h2>
        </div>
        <input type="submit" value="Iniciar partida!"/>
    </form>
    <script src="script.js"></script>
    <div id = "botones">
        <button id="sumarJ" onclick = addPlayer() display="block">Añadir Jugador</button>
        <button id="restarJ" onclick = removePlayer() display="none">Quitar Jugador</button>
    </div>
    
</body>
</html>