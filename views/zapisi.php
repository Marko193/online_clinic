<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <?php include("../blocks/head.php")?>
</head>
<body>
<?php include("../blocks/header.php")?>

    <div id='wrapper'>
  <h1>Your Orders</h1>
  
      <?php
                       include("../bd.php");
                        connect();
						
						function zapis_all(){
						    $id=$_SESSION['login'];
							$query = "SELECT * FROM `visit` where ses = '$id'";
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
						
                    ?>
					<div style="display: block; margin:50px 20%">
					<table border="1">
  <tr >
    <th>Name</th>
    <th>Last_name</th>
    <th>Adress</th>
    <th>Telephone</th>
    <th>Date</th>
	<th>Time</th>
    <th>Commemts</th>
    <th>Doctor_Name</th>
    <th>Status</th>
  </tr>
  <?php foreach ($zapisi as $a): ?>
  <tr>
    <th><?= $a['name']?></th>
    <th><?= $a['last_name']?></th>
    <th><?= $a['adress']?></th>
    <th><?= $a['telefon']?></th>
    <th><?= $a['date']?></th>
	<th><?= $a['time_resp']?></th>
    <th><?= $a['comments']?></th>
    <th><?= $a['doctorName']?></th>
    <th><?= $a['status']?></th>
  </tr>
  <?php endforeach ?>
</table>
</div>
    </div>                   
<?php include("../blocks/footer.php")?>
</body>
</html>