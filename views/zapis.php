<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <?php include("../blocks/head.php");?>
</head>
<body>

<?php include("../blocks/header.php")?>
    <div id='wrapper'> 
        <h1>Create Order</h1>
        <div id = "login">
            <form id="addHistory" action="zap.php" method="post">
                <label for="name"><b>Name:</b></label><br>
                <input type="text" size="30" name="name"><br>
                <label for="last_name"><b>Surname:</b></label><br>
                <input type="text" size="30" name="last_name"><br>
                <label for="adress"><b>Adress:</b></label><br>
                <input type="text" size="40" name="adress"><br>
                <label for="telefon"><b>Phone number:</b></label><br>
                <input type="text" size="30" name="telefon"><br>
                <label for="date"><b>Date reception:</b></label><br>
                <input type="date" name="date" value="2019-03-03 12:00:00" size="20"><br>
				<label for="time"><b>Time reception:</b></label><br>
                <input type="time" size="30" name="time"><br>
                <label for="comments"><b>What a problem?</b></label><br>
                <textarea cols="25" rows="5" name="comments"></textarea><br>
                    <?php
                        include("../bd.php");
                        connect();
                        // вывод фио доктора
                        $sotr = mysql_query("SELECT * FROM doctor");
                        if ($sotr == true) {
                             echo "<select id='doctorName' name='doctorName'>";
                             while ($s = mysql_fetch_array($sotr)) {
                                  echo "<option>".$s['family']." ".$s['name']." ".$s['patronymic']." ".$s['info']."</option>";
                             }
                            echo "</select>";
							                        }
                        else {
                            echo "No doctors!";
                        }
                    ?>
                <input type="submit" value="New Order" name="add_history">
                <INPUT TYPE="RESET" VALUE ="Reset">
            </form>
        </div>
    </div>
<?php include("../blocks/footer.php")?>
    </body>
</html>