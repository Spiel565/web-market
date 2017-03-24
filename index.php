<html>
<head>
<title>PS-Store</title>
<script src='jquery.js'></script>
<script src='jquery-ui.js'></script>
<script src='jquery-ui.min.js'></script>
<link rel='stylesheet' type='text/css' href='jquery-ui.min.css'>
</head>
<font color='#00ffd8' face='Comic Sans MS'>
<style>
#table1{
margin:0px auto;
}
#dialog1{
display:none;
}
#dialog2{
display:none;
}
#dialog3{
display:none;
}
#dialog4{
display:none;
}
.koshik1{
margin:0px 5px 0px 5px;
width:20px;
height:20px;
background:white;
border:1px solid black;
box-shadow:0px 0px 15px black;
cursor:pointer;
}
.koshik2{
margin:0px 5px 0px 5px;
width:20px;
height:20px;
background:#00ffd8;
border:1px solid black;
box-shadow:0px 0px 15px black;
cursor:pointer;
}
.redd{
	background:red;
}
.whitee{
	background:white;
}
</style>
<script>
$(function(){
	    $( "#dialog1" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
		    $( "#dialog2" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
		    $( "#dialog3" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
			    $( "#dialog4" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
$( "#dialog4" ).dialog( "option", "height", 550 );
$( "#dialog4" ).dialog( "option", "width", 700 );
    $( "#m1" ).click(function(){
		$("#dialog1").dialog('open')
		})
		    $( "#m2" ).click(function(){
		$("#dialog2").dialog('open')
		})
		    $( "#m3" ).click(function(){
		$("#dialog3").dialog('open')
		})
		$('#korzuna').hover(function(){
			$(this).animate({'width':'60px','height':'60px'},500)
		},function(){
			$(this).animate({'width':'50px','height':'50px'},500)
		})
		$('#komirku div').click(function(){
			if($(this).attr('title')=='')
			{
			$(this).removeClass('koshik1').addClass('koshik2').attr('title','Вибрано товар')
			}else if($(this).attr('title')=='Вибрано товар')
			{
				$(this).removeClass('koshik2').addClass('koshik1').attr('title','')
			}
			counttovar=0
			namestovar=''
		$('.koshik2').each(function(){
				counttovar=counttovar+1
				namestovar=namestovar+$(this).attr('id')
			})
			$('#count').html(counttovar)
		})
		$('#korzuna').click(function(){
			$.ajax({
				type:'POST',
				url:'show_table.php',
				data:({counttovar,namestovar}),
				success:function(data){
					$('#dialog4').html(data)
					$('#dialog4').dialog('open')
					$('.row input').keyup(function(){
					var k=$(this).val()
					var c=$(this).attr('title')
					var n=$(this).attr('name')
					var sum=k*c
					var razom=0
					$('#sum'+n).html(sum+' Грн.')
					$('.symu').each(function(){
						razom=razom+parseInt($(this).html())
					})
					$('#full').html(razom+' Грн.')
				})
				$('#zz').click(function(){
					var zamov=''
					for($i=0;$i<counttovar;$i++){
					zamov=zamov+$('#Nazvatovariv'+$i).html()+' - К-сть '+$('#ki'+$i).val()+'<br>'
					}







					var full=$('#full').html()
					var name=$('#name').val()
					var phone=$('#phone').val()
					var mail=$('#mail').val()
					var street=$('#street').val()
					var street2=$('#street2').val()
					var koment=$('#koment').val()
					var dozvil=0
					$('.info').each(function(){
					var z=$(this).val()
					if (z==''){
						$(this).removeClass('whitee').addClass('redd').attr('placeholder','Заповніть поле')
						dozvil=dozvil+1
					}
					})
					$('.info').focus(function(){
						$(this).removeClass('redd').addClass('whitee').attr('placeholder','')
					})
					if(dozvil==0){
					$.ajax({
						type:'POST',
						url:'mail.php',
						data:({name,phone,mail,street,street2,full,zamov,koment,}),
						success:function(data){
						}
					})
					$.ajax({
						type:'POST',
						url:'mail2.php',
						data:({name,phone,mail,street,street2,full,zamov,koment,}),
						success:function(data){
						}
					})
					var tak=confirm('Ви дійсно хочете замовити цей товар?')
					if(tak){
						alert('Ваше замовлення прийнято! Скоро наш оператор вам подзвонить для уточнення інформації')
					}else{
						$('#dialog4').dialog('close')
					}
					}
				})
			}
		})
	})
})

</script>
<div><form method='post' action='login.php' class='login'><p><label for='login'>
Ел. Почта:</label><input type='text' name='login' id='login'></p><p><label for='password'>
Пароль:</label><input type='password' name='password' id='password' value=''>
</p><p class='login-submit'><button type='submit' class='login-button'>Ввійти</button>
</p><p class='forgot-password'><a href='forgot-password.php'>Забув пароль?</a></p><p class='register'>
<a href='register2.php'>Зареєструватись</a></p></form></div>
<body bgcolor='black'>
<table border='0' width='70%' id='table1'>
<tr style='color:#00ffd8'>
	<td rowspan='2' width='30%'><a href='http://s228.skill.in.ua/php/THIS_IS_MAGAS/index.php'><img src='PS-Store.jpg' width='150' height='100' alt='Інтернет Магазин PS-Store' title='Інтернет Магазин PS-Store - №1'></td>
	<td width='35%'><h1>PS-Store</h1></td>
	<td colspan='2' style='color:#00ffd8;'>
	<ul type='disk'>
		<li id='m1'>Про магазин
		<li id='m2'>Правила
		<li id='m3'>Координати
	</ul>
	</td>
</tr>
<tr style='color:#00ffd8'>
	<td></td>
	<td><h4>Вибрано товарів: </h4><span id='count'><h4>0</h4></span></td>
	<td width='10%' height='86' align='center' ><img src='korzina.png' width='50' height='50' id='korzuna' style='padding:5px;' style='cursor:pointer;'></td>
</tr>
<tr style='color:#00ffd8'>
<td colspan='4'><hr width='100%' color='#00ffd8' size='4'></td>
</tr>
</table>
<table width='70%' border='0' align='center'>
<tr align='center' style='color:#00ffd8'>
<td width='5%'>№</td><td width='5%'>Назва товару</td><td width='50%'>Опис Товару</td><td width='10%'>Ціна</td><td width='35%'>Фото</td>
</tr>
<?php include 'showtovar.php';?>
</table>
<div id='dialog1' title='Про магазин'>Про магазин</div>
<div id='dialog2' title='Правила'>Правила:<BR>1.Подумай<BR>2.Про<BR>3.Це</div>
<div id='dialog3' title='Координати'>Координати:<BR>Україна, Тернопіль, вул.Пирогова 44</div>
<div id='dialog4' title='Замовлення'>Замовлення</div>
</body>
</html>
