
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
echo "<br>";
$id=1;
$sql="DELETE FROM owners WHERE id=$id";
if(mysqli_query($conn,$sql))
{
    echo"delete successful";
}
else {
    echo"delete failed".mysqli_connect_error($conn);
}
mysqli_close($conn);
?>