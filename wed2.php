<?php
$severname="localhost";
$username="root";
$password="";
$dbname="userme";
$conn=mysqli_connect($severname,$username,$password,$dbname);
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}
echo"connection successful";
$sql="CREATE TABLE owners(id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(20) NOT NULL ,emp_salary INT NOT NULL)";
if(mysqli_query($conn,$sql))
{
    echo"table owners created successfully";
}
else
{
    "table creation failed:".mysqli_error($conn);
}
mysqli_close($conn);
?>