<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todas las filas</title>
</head>
<body>
	<h1>Todas las Filas</h1>
	<?php
    	require ("script/Connection.php");
        $db = new DbConnection();
        $db->connect();
        $filas=$db->getAllRows('select * from Autor where idAutor>100 order by nombreAutor');
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