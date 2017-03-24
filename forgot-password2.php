<head><title>Відновлення паролю в інтернет магазині PS-Store</title><link rel="shortcut icon" href="favicon.ico" type="image/x-icon"></head>
<body bgcolor='black'>
  <font color='#00ffd8' face='Comic Sans MS'>
<?
$email=$_POST['emailforcheck'];
$host = "localhost";
$user = "s34";
$passsword = "R5f7K5u4";
$db="s34";

if (!mysql_connect($host, $user, $passsword))
    {
      echo "<h2>Немаэ з'єднання</h2>";
      exit;
    };
mysql_select_db($db);

mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
mysql_query("SET CHARACTER SET 'utf8'");
$q=mysql_query("SELECT password FROM logpass WHERE login = '$email'");
$row=mysql_fetch_array($q);
$pass=$row["password"];
$zamovlennya="Ви запросили запит на пароль. Ваш пароль:<br>".$pass."<br>Приємних вам покупок!";
$adminmail='support@ps-store.com';
$nameshop='PS Store';
$subject='Ваш пароль від Інтернет Магазину';
$headers="MIME-Version:1.0\r\n";
$headers.="Content-type:text/html; charset=utf-8\r\n";
$headers.="From:".$nameshop."<".$adminmail.">\r\n";
$ok=mail($email,$subject,$zamovlennya,$headers);
?>
<h1 align='center'>Тепер ввійдіть на свою Ел. почту і там буде ваш пароль <a href='index.php'> <b>Назад на головну</b></h1>
