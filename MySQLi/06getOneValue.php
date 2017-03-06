<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Obtener un Valor</title>
</head>
<body>
	<h1>Obtener un Valor</h1>
	<?php 
		require '../script/Con.php';
		$db = new DbConnection();
        $db->connect();
        $value=$db->getOneValue('select nombreAutor from Autor where idAutor=1085');
        $db->disconnect();
        if (!is_null($value)) {
            echo $value;
        }else{
            echo "No hay resultados";
        }
	 ?>
</body>
</html>