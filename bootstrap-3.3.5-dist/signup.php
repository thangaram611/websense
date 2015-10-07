<?php
$host="localhost"; 
$username="";
$password=""; 
$db_name="websence";
$tbl_name="websence";

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 
$myemail=$_POST['myemail']; 
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="INSERT INTO `websence`(`email`, `name`, `password`) VALUES ($myemail,$myusername,$mypassword)";
?>