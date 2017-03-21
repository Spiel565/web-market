<title>Реєстація в інтернет магазині PS-Store</title>
<?php
$login=$_POST['login'];
$passsword=$_POST['passsword'];
	$host = "localhost";
	$user = "s34";
	$password = "R5f7K5u4";
	$db="s34";

	if (!mysql_connect($host, $user, $password))
			{
				echo "<h2>Немаэ з'єднання</h2>";
				exit;
			};
	mysql_select_db($db);

	mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
	mysql_query("SET CHARACTER SET 'utf8'");
	mysql_query("INSERT INTO `logpass`(`login`, `password`) VALUES ('$login','$passsword')");
?>
<h1 align='center'>Реєстація пройшла успішно! Попробуйте зайти на сайт!</h1>
