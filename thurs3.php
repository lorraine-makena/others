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
$sql="SELECT * FROM owners";
$retrival=mysqli_query($conn,$sql);
if(mysqli_num_rows($retrival)>0)
{
    while($row=mysqli_fetch_assoc($retrival))
    {
        echo "id: $row[id]";
        echo "<br>";
        
        echo "salary: $row[emp_salary]";
        echo "<br>";
        
        echo "name: $row[name]";
        
//end of loop
}
}
//end of if 
else{
    echo  "no result";
}
mysqli_close($conn)
?>