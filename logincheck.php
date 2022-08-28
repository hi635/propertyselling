<?php
include('include/header.php');
include "connection.php";
session_start();
$username = $_POST['unm'];
$password = $_POST['pwd'];
$rs = mysql_query("select * from  registration where unm='".$username."' and password='".$password."'");
$cnt=mysql_num_rows($rs);
//echo "hello";

//exit;


if($cnt >= 1)
{
	$_SESSION['unm'] = $username;	
	header("Location:property.php");
}
else
{
	$msg = "Username or Password are not correct, try again.";
	header("Location:login.php?msg=$msg");
}
?>