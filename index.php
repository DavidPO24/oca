<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego Oca</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF']?>">
        <!--<p>N&uacute;mero de jugadores: 
            <input type="number" id= "jugadores" min="2" max="4"/>
        </p>-->
        <div id="jugadores">
            <h2>Elige jugadores para comenzar</h2>
        </div>
        <input type="submit" value="Iniciar partida!"/>
    </form>
    <script src="script.js"></script>
    <div id="botones">
        <button id="sumarJ" onclick="addPlayer()">Añadir Jugador</button>
        <button id="restarJ" onclick="removePlayer()" style="display: none;">Quitar Jugador</button>
    </div>
</body>
</html>
