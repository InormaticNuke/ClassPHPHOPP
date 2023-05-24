<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>
<body>

    <form action="" method="post">

    1st<input type="text" name="first" id="first">
    <br>
    2nd<input type="text" name="second" id="second">
    <br>
    3rd<input type="text" name="third" id="third">
    <br>
    4th<input type="text" name="fourth" id="fourth">
    <br>
    5th<input type="text" name="fifth" id="fifth">
    <br>
    6th<input type="text" name="sexth" id="sexth">
    <br>
    7th<input type="text" name="seventh" id="seventh">
    <br><br>
    <button type="submit" name="ButtonS">SendData</button>

    </form>
    
</body>
</html>

<?php

include "gradesCalc.php";

$person = new grades();

if(isset($_POST["ButtonS"])){

    $person->setData();
    $person->add();

}

?>