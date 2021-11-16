<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>log in page</h1>
    <form action="joining.php" method="post">
        <table>
        username
        <input type="text" name="username" value=""><br>
        password
        <input type="password" name="password" value=""><br>
        <input type="submit" value="submit"><br>
    </table>
    </form>


    

<?php
$name=$_POST["username"];
$pass=$_POST["password"];
if(empty($_POST["username"]))
{
    echo"ensure to input a relevant username password";
}
elseif (empty($_POST["password"])) 
{
    echo"wrong password";
}
else{
    echo"$name<br/>$pass";
}
?>
</body>
</html>