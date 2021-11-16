<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nme = $_POST["name"];
    $emal = $_POST["email"];
    $tim = $_POST["time"];
    $class = $_POST["classes"];
    $gnder = $_POST["gender"];
    $slect = $_POST["select"];
    $agre = $_POST["agree"];
}

if (empty($_POST["name"])) {
    echo "name field required";
} elseif (empty($_POST["email"])) {
    echo "email field required";
} elseif (empty($_POST["gender"])) {
    echo "gender field required";
} elseif (empty($_POST["agree"])) {
    echo "you must agree to the terms and conditions";
} else {
    $nme = $_POST["name"];
    $emal = $_POST["email"];
    $tim = $_POST["time"];
    $class = $_POST["classes"];
    $gnder = $_POST["gender"];
    $slect = $_POST["select"];
    $agre = $_POST["agree"];

    echo "your name is $nme <br>";

    echo "your email address is $emal<br>";

    echo "your class time is  $tim <br>";
    echo "your class details are: $class";

    echo "your gender is $gnder <br>";
    echo "you are pursuing : $slect <br>";
    echo "thank you for chosing to learn fron us <br>";
}
