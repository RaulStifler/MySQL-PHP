<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Todas las filas</title>
</head>
<body>
	<h1>Todas las Filas</h1>
	<?php
    	require ("../script/Con.php");
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
        $db = new DbConnection();
        $db->connect();
        $filas=$db->getAllRows('select * from Autor where idAutor>1080 order by nombreAutor');
        $db->disconnect();
        if (is_array($filas)) {
        	foreach ($filas as $fila) {
        	echo $fila['idAutor']."---".$fila['nombreAutor']."<br>";
        }
        }else{
        	echo "No hay resultados";
        }
    ?>﻿
</body>
</html>