<?php
$name=$_POST['name']; 
$phone=$_POST['phone'];  
$mail=$_POST['mail']; 
$street=$_POST['street'];
$full=$_POST['full'];
$zamov=$_POST['zamov']; 
$koment=$_POST['koment']; 
$zamovlennya="Кліент зробив таке замовлення:<br>".$zamov."На суму: ".$full."<br>Імя клієта: ".$name."<br>Моб.Телефон: ".$phone."<br>Ел.Пошта: ".$mail."<br>Адреса доставки: ".$street."<br>Коментар до замовлення: ".$koment;
$adminmail='svstorchak2@gmail.com';
$subject='Нове замовлення в Інтернет Магазині';
$nameshop='PS Store';
$headers="MIME-Version:1.0\r\n";
$headers.="Content-type:text/html; charset=utf-8\r\n";
$headers.="From:".$nameshop."<".$adminmail.">\r\n";
$ok=mail($adminmail,$subject,$zamovlennya,$headers); 
echo $ok;
?>