<!DOCTYPE html>
<html>
<head>
    <?php include("../blocks/head.php")?>
</head>
<body>
<?php include("../blocks/header1.php")?>

    <div id='wrapper'>
    <h1>REGISTRATION</h1>
        <div id = "login">
            <form action = "save_user.php" method = "post">
                <label> Your name: </label>
                <input type = "text" name = "user" /><br/><br />
                <label> Your surname: </label>
                <input type = "text" name = "family" /<br/><br />
                <label> Your email: </label>
                <input type = "email" name = "email" /<br/><br />
                <label> Your login: </label>
                <input type = "text" name = "login" maxlength = "15" /<br /><br />
                <label> Your password: </label>
                <input type = "password" name = "password" maxlength = "15" /<br/><br />
                
                <input type = "submit" value = "Registrate" name = "submit"/><br />
            </form>
        </div>
    </div>

<?php include("../blocks/footer.php")?>
</body>
</html>