<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>last ID</title>
</head>
<body>
	<h1>Ultimo ID</h1>
		<?php 
			require '../script/Con.php';
			$db = new DbConnection();
	        $db->connect();
	        $value=$db->getLastId();
	        echo $value;
	        $db->disconnect();
		 ?>
</body>
</html>