<?php
$severname="localhost";
$username="root";
$password="";
$dbname="userme";
$conn=mysqli_connect($severname,$username,$password,$dbname);
if(!$conn)
{
    die("connection error:".mysqli_connect_error());
}
echo"connection successful";
$sql="INSERT INTO owners(name,emp_salary) VALUES('johnson', 9000)";
if(mysqli_query($conn,$sql))
{
    echo("data inserted:".mysqli_connect_error());
}
else{
    echo"data inserted successfull";
}
mysqli_close($conn);
?>