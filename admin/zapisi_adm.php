<?php 
session_start();
if(isset($_GET['action']))
$action=$_GET['action'];
else
$action='';
?>
     
<!DOCTYPE html>
<html>
<head>
    <?php include("../blocks/head.php")?>
</head>
<body>
<?php include("../blocks/header2.php")?>

    <div id='wrapper'>
  <h1>All Orders</h1>
  
      <?php
                       include("../bd.php");
                        connect();
						
						$action=$_GET['action'];
if($action=="asc"){
	function zapis_all(){
							$query = "SELECT * FROM  `visit` ORDER BY  `status` ASC LIMIT 0 , 30";
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
}
elseif($action=="desc"){
						function zapis_all(){
							$query = "SELECT * FROM  `visit` ORDER BY  `status` DESC LIMIT 0 , 30";
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
						}
						elseif($action=="acc"){
						function zapis_all(){
							$query = "SELECT * FROM  `visit` where `status`='Accept'";
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
						}
							elseif($action=="den"){
						function zapis_all(){
							$query = "SELECT * FROM  `visit` where `status`='Deny'";
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
						}
							elseif($action=="proc"){
						function zapis_all(){
							$query = "SELECT * FROM  `visit` where `status`='Processing'";
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
						}
						else{
							function zapis_all(){
							$query = "SELECT * FROM  `visit` ";
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
						}
                    ?>
				<div style="display:block; margin: 50px 10% 0 ;">
	<a href="zapisi_adm.php?action=asc">Sort ASC</a>	
	<a href="zapisi_adm.php?action=desc">Sort DESC</a>	
	<a href="zapisi_adm.php?action=acc">All Accepted</a>	
	<a href="zapisi_adm.php?action=den">All Denied</a>
	<a href="zapisi_adm.php?action=proc">All Processing</a>		
<table border="1" >
  <tr >
    <th>Name</th>
    <th>Last_name</th>
    <th>Adress</th>
    <th>Telephone</th>
    <th>Date</th>
    <th>Commemts</th>
    <th>Doctor_Name</th>
    <th>Status</th>
	<th></th>
	<th></th>
	<th></th>
  </tr>
  <tr>
    <?php foreach ($zapisi as $a): ?>
  <tr>
    <th><?= $a['name']?></th>
    <th><?= $a['last_name']?></th>
    <th><?= $a['adress']?></th>
    <th><?= $a['telefon']?></th>
    <th><?= $a['date']?></th>
    <th><?= $a['comments']?></th>
    <th><?= $a['doctorName']?></th>
    <th><?= $a['status']?></th>
	<th><a href="zap_admin.php?action=tr&id=<?=$a['id']?>&ses=<?=$a['ses']?>">Accept</a></th>
	<th><a href="zap_admin.php?action=fl&id=<?=$a['id']?>&ses=<?=$a['ses']?>">Deny</a></th>
	<th><a href="zap_admin.php?action=red&id=<?=$a['id']?>&ses=<?=$a['ses']?>">Edit</a></th>
  </tr>
  <?php endforeach ?>
	
  </tr>

</table>
    </div>
	
	</div>
	 
                         
<?php include("../blocks/footer.php")?>
</body>
</html>