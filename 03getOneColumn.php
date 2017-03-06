<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Obtener una Columna</title>
</head>
<body>
    <h1>Obtener una Columna</h1>
    <?php
        require 'script/Con.php';
        $db = new DbConnection();
            echo "Hola";
        $db->connect();
        $filas=$db->getOneColumn('select * from Libro');
        if (is_array($filas)) {
            foreach ($filas as $fila) {
            echo $fila."<br>";
        }
        }else{
            echo "No hay resultados";
        }
        $db->disconnect();
    ?>﻿
</body>
</html>