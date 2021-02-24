<?php 

//function connection to the bd

function connect(){
    $db= mysql_connect("localhost","root","")
    or die ("<p>The error of connection to the DB " .mysql_error()."</p>");
    mysql_select_db("stud1")
    or die ("<p>The error of chossing the DB " .mysql_error(). "</p>");
	mysql_query("SET NAMES utf8");
}
//$mysqli = new mysqli("localhost", "root", "", "stud1");
//$mysqli_query->("SET NAMES utf-8");
//$mysqli->close();


?>