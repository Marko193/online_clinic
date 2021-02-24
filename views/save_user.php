<?php
include("../bd.php");

// сохранение личных данных

if(isset($_POST['submit']))
{
    
    $user = htmlspecialchars(trim($_POST['user']));
    $family = htmlspecialchars(trim($_POST['family']));
    $email = htmlspecialchars(trim($_POST['email']));
    $login = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars(trim($_POST['password']));

    $form = array($user,$family,$email,$login,$password);/*проверяем пустые ли поля*/
    foreach($form as $s => $value){
        if($value == ""){
            echo 'Заполните поле'; 
            exit;
        }
    }

    $db = connect();

    $res = mysql_query("SELECT `user` FROM `users` WHERE `login` = '$login' ");/*проверяем есть ли такой логин в бд*/
    $data = mysql_fetch_array($res);
    if(!empty($data['login'])){
        die("Такой логин уже существует!");
    }

    $password = hash('sha1', $password.$login);/*хешируем код с помощью sha1 и соли*/
    $query = "INSERT INTO `users` (`user`,`family`,`email`,`login`,`pass`)
    VALUES('$user','$family','$email','$login','$password') ";/* записуем личные данные в БД*/
    $result = mysql_query($query);

    if($result == true){
        echo'<script type="text/javascript">
        window.location = "login.php"
        </script>';
    }else{
        echo "Error! ----> ". mysql_error();
    }
}
?>