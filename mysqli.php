<?php
$servername="localhost";
$username="lmn";
$password="";
$database="customers";
//create a connection
$connection=mysqli_connect($servername,$username,$password,$database);
if(!$connection)
{
    die("mysqli_connect_error()");
}
echo"connection successful";
mysqli_connect_close($connection);
?>