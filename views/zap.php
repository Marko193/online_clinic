<?php
include('../bd.php');
session_start();
connect();

/*обработчик записи на прием*/
$name = $_REQUEST['name'];/*принимаем данные*/
$last_name = $_REQUEST['last_name'];
$adress = $_REQUEST['adress'];
$telefon = $_REQUEST['telefon'];
$date = $_REQUEST['date'];
$time = $_REQUEST['time'];
$comments = $_REQUEST['comments'];
$doctorName = $_REQUEST['doctorName'];
$id_ses=$_SESSION['login'];

$form = array($name,$last_name,$adress,$telefon,$date,$time,$comments,$doctorName);/*проверяем пустые ли поля*/
    foreach($form as $s => $value){
        if($value == ""){
            echo 'Заполните поле'; 
            exit;
        }
    }
		function zapis_all(){
							$query = "SELECT date, time_resp FROM `visit` ";
							$result = mysql_query($query);
							$n = mysql_num_rows($result);
							$zapisi = array();
							for ($i=0; $i<$n;$i++){
								$row = mysql_fetch_assoc($result);
								$zapisi[] = $row ;
							}
							return $zapisi;
						}
						$zapisi = zapis_all();
						
                   
					 foreach ($zapisi as $a){
  if($date==$a['date'] and $time == $a['time_resp'] and $doctorName == $a['doctorName']){
  echo 'This time is already been occupied'; 
            exit;
   }
   }

$mysql_insert = "INSERT INTO visit(name,last_name,adress,telefon,date,time_resp,comments,doctorName,ses)". 
"VALUES('{$name}','{$last_name}','{$adress}','{$telefon}','{$date}','{$time}','{$comments}','{$doctorName}','{$id_ses}');";/*запись данных*/
mysql_query($mysql_insert) or die ("<p>The error of inputting! ".mysql_error());
echo '<script type="text/javascript">
        window.location = "zapisi.php"
        </script>'
		
?>
<a href="../index.php">Get back to the main menu</a>