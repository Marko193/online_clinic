<!DOCTYPE html>
<html>
<head>
    <?php include("../blocks/head.php")?>
</head>
<body>

<?php include("../blocks/header3.php")?>
    
    <div id='wrapper'> 
        <h1>Autorisation</h1>
        <div id = "login">
            <form action="adm.php" method="post">
                <label>Login:</label>
                <input type="text" name="login" size="15" maxlength="15" /><br /><br />
                <label>Password:</label>
                <input type="password" name="password" size="15" maxlength="15"/><br/><br />
                <input type="submit" value = "Enter" name="submit"/><br />
                <hr/>
            </form>
        </div>
    </div>

<?php include("../blocks/footer.php")?>
</body>
</html>