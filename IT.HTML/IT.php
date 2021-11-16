<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:grey;fontsize: 20px;fontfamily:harrington">
<h4>area of a circle</h4>
<div style="align:right">
    <form action="" method="post">
        <label for="radius">radius</label><br>
    <input type="text" name="radius" id="" value=""><br>
    <input type="submit" value="calculate">
</form></div>
<div style="align:right;color:purple">
    <h3 style="color:yellow">area of a trapezium</h3>
    <form action="" method="post">
    <label for="a">side a</label><br>
    <input type="text" name="a" id="" value=""><br>
    <label for="b">side b</label><br>
    <input type="text" name="b" id="" value=""><br>
    <label for="height">height</label><br>
    <input type="text" name="height" id="" value=""><br>
    <input type="submit" value="calculate">
    </div>
</form>
    <?php
function circle_area()
{
    $radii=$_POST["radius"];
    $area=$radii * $radii * 22/7;
    echo "<h1>$area</h1>";
}
circle_area();
function trapezium_area()
{
    $left=$_POST["a"];
    $right=$_POST["b"];
    $vertical_height=$_POST["height"];
    $area=($left + $right) * 1/2 * $vertical_height;
    echo "<h2>$area</h2>";
}
trapezium_area();
?>
</body>
</html>