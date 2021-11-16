<?php
$servername="localhost";
$username="root";
$database="logon";
$password="";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die("connection failed" .!$con);
}
echo"connection successful";
mysqli_close($con);
?>
