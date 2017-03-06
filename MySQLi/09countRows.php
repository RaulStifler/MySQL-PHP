<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>last ID</title>
</head>
<body>
	<h1>Contar Filas</h1>
		<?php 
			require '../script/Con.php';
			$db = new DbConnection();
	        $db->connect();
	        $value=$db->countRows("Libro");
	        echo $value;
	        $db->disconnect();
		 ?>
</body>
</html>