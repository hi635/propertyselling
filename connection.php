<?php
//session_start();
ob_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname= "estate";
$db = mysql_connect($host, $user, $password);
$rs = mysql_select_db($dbname,$db);

/*$mysqli = new
mysqli("localhost","my_user","my_password","my_db");
 
 //check connection
 if ($mysqli -> connect_errno);
 {
    echo "falied to connect to mysql:".$mysqli -> connect_error;
  exit();
  }*/
?>