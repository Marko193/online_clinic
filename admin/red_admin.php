<?php
session_start();
include('../bd.php');
connect();
$name = $_POST['name'];/*принимаем данные*/
$last_name = $_POST['last_name'];
$adress = $_POST['adress'];
$telefon = $_POST['telefon'];
$date = $_POST['date'];
$time = $_POST['time'];
$comments = $_POST['comments'];
$vrach = $_POST['vrach'];
$doctorName = $_POST['doctorName'];
$id=$_SESSION['zap'];
$form = array($name,$last_name,$adress,$telefon,$date,$time,$comments,$doctorName);/*проверяем пустые ли поля*/
$mysql_insert = "UPDATE visit SET name='$name',last_name='$last_name',adress='$adress',telefon='$telefon',date='$date',time_resp='$time',comments='$comments', doctorName='$doctorName' WHERE id='$id'"; 
mysql_query($mysql_insert) or die ("<p>Ошибка вставки ".mysql_error());

echo '<script type="text/javascript">
        window.location = "zapisi_adm.php"
        </script>';	


	
		?>
