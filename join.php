<?php

include('connection.php');

if($_POST)
{
$name=$_POST['name'];
$username=$_POST['username'];
//$password=$_POST['password'];
//$gender=$_POST['gender'];
echo "insert into a(name,username) values('$name','$username')";
mysql_query("insert into a(name,username) values('$name','$username')");

}
else { }

?>
