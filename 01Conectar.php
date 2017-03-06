<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Buen dia</h1>
	<?php
    	require 'script/Connection.php';
        $db = new DbConnection();
        $db->connect();
        $db->disconnect();
    ?>﻿
</body>
</html>