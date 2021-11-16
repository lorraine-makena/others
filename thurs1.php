<?php
$servername="localhost";
$username="root";
$password="";
$dbname="userme";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("connection failed".mysqli_connect_error($conn));
}
echo"connection successful";
echo"<br>";
$id=2;
$name="lorraine";
$salary=6000;
$sql="UPDATE  from 'owners' SET 'id'='$id' , 'name'='$name','emp_salary'='$salary'";
if(mysqli_query($conn,$sql))
{
    echo "update successful";
}
else{
    echo"update failed".mysqli_connect_error($conn);
}
mysqli_close($conn)
?>