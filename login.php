<head><title>Вхід в інтернет магазин PS-Store</title><link rel="shortcut icon" href="favicon.ico" type="image/x-icon"></head>
<body bgcolor='black'>
  <font color='#00ffd8' face='Comic Sans MS'>
<?php
header('Content-Type: text/html; charset=utf-8');
setlocale(LC_ALL,'ru_RU.65001','rus_RUS.65001','Russian_Russia.65001','russian');
    session_start();
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (empty($login) or empty($password))
    {
    exit ("<body><div align='center'><br/><br/><br/><h1>Ви ввели не всю інформацію, верніться назад и заповніть всі поля! " . "<a href='index.php'> <b>Назад на головну</b> </a></h1></div></body>");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    $dbcon = mysql_connect("localhost", "s34", "R5f7K5u4");
    mysql_select_db("s34", $dbcon);
    if (!$dbcon)
    {
    echo "<p>Немає з'єднання до MySQL!</p>".mysql_error(); exit();
    } else {
    if (!mysql_select_db("s34", $dbcon))
    {
    echo("<p>Немає з'єднання до MySQL!</p>");
    }
    }
$result = mysql_query("SELECT * FROM logpass WHERE login='$login'", $dbcon);
    $myrow = mysql_fetch_array($result);
    if (empty($myrow["password"]))
    {
    exit ("<body><div align='center'><br/><br/><br/>
    <h1>Вибачте ви ввели неправильну Ел.Почту або Пароль. Ви можете відновити пароль. " . "<a href='forgot-password.php'> <b>Нажміть тут, щоб відновити пароль</b> </a>"." <br>"."<a href='index.php'> <b>Назад на головну</b> </a></h1></div></body>");
    }
    else {
    if ($myrow["password"]==$password) {
    $_SESSION['login']=$myrow["login"];
    $_SESSION['id']=$myrow["id"];
    header("Location:index.php");
    }
 else {


    exit ("<body><div align='center'><br/><br/><br/>
    <h1>Вибачте ви ввели неправильну Ел.Почту або Пароль. Ви можете відновити пароль. " . "<a href='forgot-password.php'> <b>Нажміть тут, щоб відновити пароль</b> </a>"." <br>"."<a href='index.php'> <b>Назад на головну</b> </a></h1></div></body>");
    }
    }
    ?>
