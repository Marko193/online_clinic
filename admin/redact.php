   <?php 
   include("zap_admin.php");
   /*include("../bd.php");
   connect();*/
						function zapis_all(){
						$id=$_SESSION['zap'];
							$query = "SELECT * FROM `visit` where id='$id'";
							$result = mysql_query($query);
							$zapisi = array();
								$row = mysql_fetch_assoc($result);
							return $row;
						}
						$zapisi = zapis_all();
                    ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("../blocks/head.php")?>

</head>
<body>

<?php include("../blocks/header2.php")?>
    <div id='wrapper'>
	
	        <h1>Editor</h1>
        <div id = "login">
            <form id="addHistory" action="red_admin.php" method="post">
                <label for="name"><b>Name:</b></label><br>
                <input type="text" size="30" name="name" value="<?=$zapisi['name']?>"><br>
                <label for="last_name"><b>Surname:</b></label><br>
                <input type="text" size="30" name="last_name" value="<?= $zapisi['last_name']?>"><br>
                <label for="adress"><b>Adress:</b></label><br>
                <input type="text" size="40" name="adress" value="<?= $zapisi['adress']?>"><br>
                <label for="telefon"><b>Phone number:</b></label><br>
                <input type="text" size="30" name="telefon" value="<?= $zapisi['telefon']?>"><br>
                <label for="date"><b>Date reception:</b></label><br>
                <input type="date" name="date" size="20" value="<?= $zapisi['date']?>"><br>
				<label for="time"><b>Time reception:</b></label><br>
                <input type="time" size="30" name="time" value="<?= $zapisi['time_resp']?>"><br>
                <label for="comments"><b>What a problem?</b></label><br>
                <textarea cols="25" rows="5" name="comments"><?= $zapisi['comments']?></textarea><br>
				<label for="vrach"><b>Doctor:</b></label><br>
                <input type="text" size="30" name="vrach" value="<?= $zapisi['doctorName']?>"><br><br>
				
                    <?php
              
                        // вывод фио доктора
                        $sotr = mysql_query("SELECT * FROM doctor");
                        if ($sotr == true) {
                             echo "<select id='doctorName' name='doctorName'>";
                             while ($s = mysql_fetch_array($sotr)) {
                                  echo "<option>".$s['family']." ".$s['name']." ".$s['patronymic']." (".$s['info'].")</option>";
                             }
                            echo "</select>";
                        }
                        else {
                            echo "Сотрудники отсутствуют";
                        }
                    ?>
				
                <input type="submit" value="Edit" name="reduct">
            </form>
        </div>
    </div>
<?php include("../blocks/footer.php")?>
    
</body>
</html>