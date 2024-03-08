<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once __DIR__."/logicaOca.php";?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero para la Oca</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 0 auto;
        }

        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            text-align: center;
            vertical-align: middle;
        }

        .start,
        .end {
            background-color: lightgreen;
        }

        .oca {
            background-color: lightblue;
        }

        @font-face {
        font-family: Dicier;
            src: url('fuenteDados/Dicier-Pixel.woff2');
        }
        .dicier {
            font-family: Dicier, sans-serif;
            font-feature-settings: “liga” 1, “kern” 1, “calt” 1;
            font-size: 50px;
        }
    </style>
</head>
<body>
    <table>
        <p class = "dicier">
            <?php echo lanzarDado()?>
            <?php echo lanzarDado()?>
        </p>
        <?php pintarTablero()?>
    </table>
</body>
</html>
