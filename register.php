<?php 
	
	$host = "localhost";
	$user = "s34";
	$password = "R5f7K5u4";
	$db="s34";
	
	if (!mysql_connect($host, $user, $password))
			{
				echo "<h2>Помилка з*єднення з сервером</h2>";
				exit;
			};
	mysql_select_db($db);
	
	mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'"); 
	mysql_query("SET CHARACTER SET 'utf8'");
	mysql_query("INSERT INTO `logpass`(`login`, `password`) VALUES ("","");")
	
	
	
	INSERT INTO `logpass`(`login`, `password`) VALUES ([value-2],[value-3])
?>