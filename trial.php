<?php
$servername="localhost";
$username="root";
$database="details";
$password="";
$connect=mysqli_connect($servername,$username,$password,$database);
if($connect)
{die("connection failed".$connection);
}
echo"connection successful";
?>