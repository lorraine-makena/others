<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="new.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div><form name="name"action="" method="post" onsubmition="return validat()">
       <label for="fname">fname</label><br>
       <input type="text" name="fname" id="fname"><br>
       <label for="mname">mname</label><br>
       <input type="text" name="mname" id="mname"><br>
       <label for="lname">lname</label><br>
       <input type="text" name="lname" id="lname"><br>
       <input type="submit" value="submit"><br>
   </form></div> 
<script>
  function validat()
  {
      var fname=document.name.fname.value;
      var mname=document.name.mname.value;
      var lname=document.name.lname.value;
      if(fname.length=="" && mname.length=="" && lname.length=="");
      {
          alert("input full details");
          return false;
      }
      else
      {
          if(fname.length=="")
          {
              alert("insert your first name");
              return false;
          }
          if(mname.length=="")
          {
              alert("insert your middle name");
              return false;
          }
          if(lname.length=="")
          {
          alert("insert your last name")
      }
    }
  }  
</script>
<?php
include("./trial.php")
?>

</body>
</html>