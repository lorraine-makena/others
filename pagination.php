
<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "pagination";
$conn = mysqli_connect($severname, $username, $password, $dbname);
if (!$conn) {
    die("connection error:" . mysqli_connect_error());
}
echo "connection successful";
echo "<br>";
?>