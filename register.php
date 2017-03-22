<head><title>Реєстація в інтернет магазині PS-Store</title></head>
<body bgcolor='black'>
  <font color='#00ffd8' face='Comic Sans MS'>
<?php
$login=$_POST['login'];
$passsword=$_POST['passsword'];
	$host = "localhost";
	$user = "s34";
	$password = "R5f7K5u4";
	$db="s34";

	if (!mysql_connect($host, $user, $password))
			{
				echo "<h2>Немає з'єднання до MySQL!</h2>";
				exit;
			};
	mysql_select_db($db);

	mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
	mysql_query("SET CHARACTER SET 'utf8'");
	mysql_query("INSERT INTO `logpass`(`login`, `password`) VALUES ('$login','$passsword')");
	$zamovlennya="Ви зареєстувались в Інтернет Магазині PS-Store!<br>Дані для входу:<br>Ел. Почта: ".$login."<br>Пароль: ".$passsword."<br>Приємних вам покупок!";
	$adminmail='svstorchak2@gmail.com';
	$nameshop='PS Store';
	$subject='Ви зареєстувались в Інтернет Магазині PS-Store';
	$headers="MIME-Version:1.0\r\n";
	$headers.="Content-type:text/html; charset=utf-8\r\n";
	$headers.="From:".$nameshop."<".$adminmail.">\r\n";
	$ok=mail($login,$subject,$zamovlennya,$headers);
?>
<h1 align='center'>Реєстація пройшла успішно! Попробуйте зайти на сайт! <a href='index.php'> <b>Назад на головну</b> </a></h1>
