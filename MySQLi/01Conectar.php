<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
    	require '../script/Con.php';
        $db = new DbConnection();
        $db->connect();
        $db->disconnect();
    ?>﻿
</body>
</html>