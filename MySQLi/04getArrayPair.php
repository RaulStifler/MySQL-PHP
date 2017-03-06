<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Obtener Array Par</title>
</head>
<body>
    <h1>Obtener Array Par</h1>
    <?php
        require '../script/Con.php';
        $db = new DbConnection();
        $db->connect();
        $filas=$db->getArrayPair('select * from Autor where idAutor>1050');
        $db->disconnect();
        if (is_array($filas)) {
            foreach ($filas as $fila) {
            echo $fila."<br>";
        }
        }else{
            echo "No hay resultados";
        }
    ?>﻿
</body>
</html>