<font color='black' face='Comic Sans MS'>
<table width='500' align='center' border='0'>
<tr style='font:bold 14px Comic Sans MS;color:#00ffd8;' align='center'>
<td>№</td><td>Назва товару</td><td>Ціна</td><td>К-сть</td><td>Сума</td>
</tr>
<script type="text/javascript">
function kill(input) {
    input.value = input.value.replace(/[^0-9]/g, '');
};
function tel(input) {
    input.value = input.value.replace(/[^0-9]/g, '');
};
</script>

<?
$counttovar=$_POST['counttovar'];
$namestovar=$_POST['namestovar'];

$x=explode(',',$namestovar);


include 'start.php';
$fs=0;
for($i=0;$i<count($x)-1;$i++){
$q=mysql_query("SELECT id,name,price FROM Tovary_Magasa WHERE id='$x[$i]'");
$row=mysql_fetch_array($q);
$fs=$fs+$row['price'];
?>
<TR>
<td style='color:#00ffd8;' align='center'><?php echo $i+1;?></td>
<td style='color:#00ffd8;' align='center' id='Nazvatovariv<?echo $i;?>'><?php echo $row['name'];?></td>
<td style='color:#00ffd8;' align='center'><?php echo $row['price'].' Грн.';?></td>
<td style='color:#00ffd8;' class='row' align='center'><input onkeyup="return kill(this);" onchange="return kill(this);" type='text' value='1' title='<?echo $row['price'];?>' size='4' name='<?php echo $i;?>' id='ki<?echo $i;?>' maxlength='1' class='info'></td>
<td style='color:#00ffd8;' class='symu' id='sum<?php echo $i;?>'><?echo $row['price'].' Грн.';?></td>
</tr>
<?php
}
?>
<tr>
	<td colspan='4' align='right' style='color:#00ffd8;'>Разом:</td><td style='color:#00ffd8;' id='full'><?php echo $fs?> Грн.</td>
</tr>
<tr>
</tr>
<table border='0' align='center' width='500'>
<tr>
<td colspan='3' align='left' style='color:#00ffd8;'>Прізвище і Ім'я:</td><td colspan='2'><input type='text' id='name' size='16' class='info' autocomplete="on"></td>
</tr>
<tr>
<td colspan='3' align='left' style='color:#00ffd8;'>Моб. Телефон:</td><td colspan='2'><input onkeyup="return tel(this);" onchange="return tel(this);" type='text' id='phone' size='16' class='info' autocomplete="on"></td>
</tr>
<tr>
<td colspan='3' align='left' style='color:#00ffd8;'>Ел. Пошта</td><td colspan='2'><input type='text' id='mail' size='16' class='info' autocomplete="on"></td>
</tr>
<tr>
<td colspan='3' align='left' style='color:#00ffd8;'>Місто доставки(Нова почта + 30 грн):</td><td colspan='2'><input type='text' id='street' size='16' class='info' autocomplete="on"></td>
</tr>
<tr>
<td colspan='3' align='left' style='color:#00ffd8;'>Номер відділення(Нова почта):</td><td colspan='2'><input type='text' id='street2' size='5' class='info' autocomplete="on"></td>
</tr>
<tr>
<td colspan='3' align='left' style='color:#00ffd8;'>Коментар до замовлення(необов`язково):</td><td colspan='2'><input type='text' id='koment' size='35'autocomplete="on"></td>
</tr>
<tr>
<td colspan='5' align='center'><div id='zz' style='border:2px solid black;width:300px;border-radius:30px;background:#00ffd8;padding: 10px
0px 10px 0px'>Зробити Замовлення</div></td>
</tr>
</table>
