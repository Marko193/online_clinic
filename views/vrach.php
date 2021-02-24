<!DOCTYPE html>
<html>
<head>
    <?php include("../blocks/head.php")?>
</head>
<body>
<?php include("../blocks/header.php")?>

    <div id='wrapper'>
    <h1>Doctors</h1>
	<?php
                       include("../bd.php");
                        connect();
						
						function vrach_all(){
							$query = "SELECT * FROM `doctor`";
							$result = mysql_query($query);
							$n = mysql_num_rows($result);
							$zapisi = array();
							for ($i=0; $i<$n;$i++){
								$row = mysql_fetch_assoc($result);
								$zapisi[] = $row ;
							}
							return $zapisi;
						}
						$zapisi = vrach_all();
						
                    ?>
					<div style="display: block; margin:50px 20%; font-family: 'Times New Roman', Times, serif;font-size: 150%;">
					<table border="1">
  <tr >
    <th>Family</th>
    <th>Name</th>
    <th>Patronymic</th>
    <th>Time_resp</th>
    <th>Info</th>
  </tr>
  <?php foreach ($zapisi as $a): ?>
  <tr>
    <td><?= $a['family']?></td>
    <td><?= $a['name']?></td>
    <td><?= $a['patronymic']?></td>
    <td><?= $a['date_rasp']?></td>
    <td><?= $a['info']?></td>
  </tr>
  <?php endforeach ?>
</table>
    </div>
	</div>   
                         
<?php include("../blocks/footer.php")?>
</body>
</html>