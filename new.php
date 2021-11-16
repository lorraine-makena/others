<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="new.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
<form name="login" action="" method="post" onsubmit="return validation()">
<label for="username">username</label><br>
<input type="text" name="username" id="username"><br>
<label for="password">password</label><br>
<input type="password" name="password" id="password"><br>
<input type="submit" value="login" id="login">
</form></div>
<script>
    function validation()
    {
    var username= document.login.username.value;
    var password=document.login.password.value;

    if(username.length == "" && password.length == "")
    {
        alert("username and password empty");
        return false;
        }
   else 
    {
   if(username.length =="")
    {
        alert("provide a valid username");
        return false;
    }
   if(password.length =="")
    {
        alert("provide password");
        return false;
    }
    }
    }
 //validati0n()
</script>
<?php
include("./connect.php")

?>


    
</body>
</html>