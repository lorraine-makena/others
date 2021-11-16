<?php
$servername="localhost";
$user="root";
$password="";

$conn=mysqli_connect( $servername, $user, $password);
if(!$conn)
{
    die("connection failed:". mysqli_connect_error());
}
    echo "connection successful";
$sql="CREATE DATABASE userme";

if(mysqli_query($conn,$sql))
{
    echo"database created successfully";
}
else{
    echo"database creation failed!:". mysqli_error($conn);
}
mysqli_close($conn);
?>