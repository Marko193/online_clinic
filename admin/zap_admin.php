<?php
session_start();
include("../bd.php");
connect();
if(isset($_GET['action']))
$action=$_GET['action'];
else
$action='';
if($action=="red"){
  $_SESSION['zap']=(int)$_GET['id'];

         echo '<script type="text/javascript">
        window.location = "redact.php"
        </script>';
}
elseif($action=="tr"){
 function zapis_all(){
$id=(int)$_GET['id'];
$mysql_insert = "UPDATE visit SET status='Accept' WHERE id='$id'"; 
mysql_query($mysql_insert) or die ("<p>Ошибка вставки ".mysql_error());
	$query = "SELECT * FROM `visit` where id='$id'";
	$result = mysql_query($query);
	$zapis = array();
	$row = mysql_fetch_assoc($result);
	return $row;
}
$ses=$_GET['ses'];
$query = "SELECT * FROM `users` where login='$ses'";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
$zapis = zapis_all();
$to = $row['email'];
$from = "poladmin@adm.com";
$subject = "Статус записи изменён";
$headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
$message = "Проверте ваш личный кабинет";
mail($to, $subject, $message, $headers);	
  echo '<script type="text/javascript">
        window.location = "zapisi_adm.php"
        </script>';
		}
elseif($action=="fl"){
	 function zapis_all(){
	$id=(int)$_GET['id'];
	$mysql_insert = "UPDATE visit SET status='Deny' WHERE id='$id'"; 
mysql_query($mysql_insert) or die ("<p>Ошибка вставки ".mysql_error());
	$query = "SELECT * FROM `visit` where id='$id'";
	$result = mysql_query($query);
	$zapis = array();
	$row = mysql_fetch_assoc($result);
	return $row;
}
$ses=$_GET['ses'];
$query = "SELECT * FROM `users` where login='$ses'";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
$zapis = zapis_all();
$to = $row['email'];
$from = "poladmin@adm.com";
$subject = "Статус записи изменён";
$headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
$message = "Проверте ваш личный кабинет";
mail($to, $subject, $message, $headers);	
echo '<script type="text/javascript">
        window.location = "zapisi_adm.php"
        </script>';
		
}
		
?>
