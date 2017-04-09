<?php
$filternames=$_POST['filternames'];
include 'start.php';
if ($filternames!=''){
$q=mysql_query("SELECT * FROM Tovary_Magasa WHERE Name = '$filternames'");
}else if ($filternames==''){
	$q=mysql_query("SELECT * FROM Tovary_Magasa");
}
for($i=1;$i<=mysql_num_rows($q);$i++)
{
	$row=mysql_fetch_array($q);
	?>
	<tr style='color:#00ffd8'>
	<td width='5%' align='center' id='komirku'><div id='<?php echo $i.',';?>' class='koshik1' title=''></div></td>
	<td width='5%' style='color:#00ffd8'><?php echo $row['Name'];?></td>
	<td width='50%'><?php echo $row['Help'];?></td>
	<td width='5%'><?php echo $row['Price'];echo $row['Unit'];?></td>
	<td width='35%' align='center'><img src='<?php echo $row['Poto'];?>' width='230' height='150'></td>
	</tr>
	<?php
}
?>
