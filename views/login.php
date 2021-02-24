<!DOCTYPE html>
<html>
<head>
    <?php include("../blocks/head.php")?>
</head>
<body>
<?php include("../blocks/header1.php")?>
        <div id='wrapper'> 
        <h1>Autorisation</h1>
        <div id = "login">
            <form action="log.php" method="post">
                <label>Your login:</label>
                <input type="text" name="login" size="15" maxlength="15" /><br /><br />
                <label>Your password:</label>
                <input type="password" name="password" size="15" maxlength="15"/><br/><br />
                <input type="submit" value = "Enter" name="submit"/><br />
                <hr/>
                <a href="reg.php">Registration</a>
            </form>
        </div>
    </div>
<?php include("../blocks/footer.php")?>
</body>
</html>