<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation</title>
     <form method="post" action="assignment.php">
         <table>
     <tr>
        <td><label for="name">first name</label></td>
        <td><input type="text" id=fname name="fname" value=""></td><br>
</tr>
<tr>
        <td><label for="name">middle name</label></td>
        <td><input type="text" id=sname name="sname" value=""></td><br>
</tr>
        <tr>
        <td> <label for="name">last name</label></td>
        <td><input type="text" id=lname name="lname" value=""></td><br>
</tr>
<tr>
        <td> <label for="age">age</label></td>
        <td><input type="text" id="age" name="age" value=""></td>
    </tr><br>
        <tr>
            <td>
                <label for="email">email</label>
                <input type="text" id="email" name="email" value="">
            </td>
        </tr><br>
        <tr>
            <td>
                <label for="website">website</label>
            </td><br>
          <td><input type="text" id="website" name="website" value=""></td>
        </tr><br>

        <tr>
            <td>
                <label for="residence">residence</label>
            </td>
          <td><input type="text" id="residence" name="residence" value=""></td>
            
        </tr><br>

        <tr>

          <td>Married</td>
          <td>
          <input type="radio" name="marital_status"  value="Married">
</td></tr>
<br>

<tr>
<td>Single</td>
              
           <td><input type="radio" name="marital_status" value="single"></td>
          
        </td>
    </tr><br>

        <tr>
            <td> Windowed</td>

            <td><input type="radio" name="marital_status" value="widowed">
         
        </td></tr><br>

        <tr>
        <td>Divorced</td>
             <td><input type="radio" name="marital_status" value="divorced">
             </td>
        </tr><br>
 <tr>
    <td><label for="religion">religion</label></td>
    <td><input type="radio" id="christian" name="religion" value="christian"></td>
    <td><label for="christian">christian</label></td><br>
    <td><input type="radio" id="hindu" name="religion" value="hindu"></td>
    <td><label for="hindu">hindu</label></td><br>
    <td><input type="radio" id="muslim" name="religion" value="muslim"></td>
    <td><label for="muslim">muslim</label></td>
    </tr><br>
    <tr>
        <td><label for="comment">comment</label></td>
        <td><textarea name="comment" value=""></td></tr><br>
        <tr>
            <td><label for="gender">gender</label></td>
            <td><label for="male">male</label>
            <td><input type="radio" id="male" name="gender" value="male"></td><br>
            <td><label for="female">female</label>
             <td><input type="radio" id="female" name="gender" value="female"></td>
            </tr><br>

             <input type="submit">
</table>
     </form>
</head>
<body>
    <?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $FNAME=$_POST["fname"];
    $SNAME=$_POST["sname"];
   $LNAME=$_POST["lname"];
//    $marital_status = $_POST["mstatus"];
    $age=$_POST["age"];
    $email=$_POST["email"];
    $website=$_POST["website"];
}
if(empty($FNAME))
{echo"first name is mandatory,please fill in a valid name";}
elseif(empty($SNAME))
{
    echo"fill in your second name<br>";
}
elseif (empty($LNAME)) {
    
    echo"ensure to fill your third name";
    
}else if (empty($age)){
    echo "Age is required";
}
else{
    echo  "age: $age";
    echo "<br>";
    echo "email: $email";
    echo "<br>";
    echo "website: $website";
    echo "<br>";
    
    echo  "first name: $FNAME";
    echo "<br>";
    echo "email: $SNAME";
    echo "<br>";
    echo "website: $LNAME";
}

?>
</body>
</html>