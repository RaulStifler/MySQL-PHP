<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Obtener una Fila</title>
</head>
<body>
	<h1>Obtener una Fila</h1>
	<?php 
		require 'script/Connection.php';
		$db = new DbConnection();
        $db->connect();
        $filas=$db->getOneRow('select * from Autor where idAutor = 1081');
        $db->disconnect();
        if (is_array($filas)) {
        	echo $filas['idAutor']."---".$filas['nombreAutor'];
        }else{
            echo "No hay resultados";
        }
	 ?>
</body>
</html>