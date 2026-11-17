<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo POST en PHP</title>
</head>
<body>

        <?php
    // 1. Verificamos si los datos fueron enviados a través del método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        /* 
           2. Recogemos los datos usando las claves del atributo 'name' del formulario.
           Usamos htmlspecialchars() por seguridad, para evitar que introduzcan código malicioso (XSS).
        */
        $nombre = htmlspecialchars($_POST['name']);
        $edad = htmlspecialchars($_POST['age']);

        // 3. Mostramos los resultados en pantalla
        echo "<h3>Datos Recibidos:</h3>";
        echo "El nombre ingresado es: <strong>" . $nombre . "</strong><br>";
        echo "La edad ingresada es: <strong>" . $edad . "</strong> años.";
    }
    ?>

</body>
</html>