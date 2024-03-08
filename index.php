<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego Oca</title>
    <link rel="stylesheet" href="styles.css">
    <?php require_once __DIR__."/dataCheck.php"; ?>
</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" id="playerForm" method="post">
        <div id="jugadores">
            <h2 class="formTitle">Elige jugadores para comenzar</h2>
        </div>
        <input class="submitPlayer" type="submit" value="Iniciar partida!"/>
    </form>
    <script src="script.js"></script>
    <div id="botones">
        <button class="button2" id="sumarJ" onclick="addPlayer()">Añadir Jugador</button>
        <button class="button2" id="restarJ" onclick="removePlayer()" style="display: none;">Quitar Jugador</button>
    </div>
    <div id="formErrors">
        <?php
            if (!empty($errors)) {
                foreach ($errors as $error){
                    echo "<p class='error'>".$error."</p>";
                }
            }
        ?>
    </div>
</body>
</html>
