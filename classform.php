<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

    <form action="" method="post">

    <input type="text" name="rut" id="rut">
    <br>
    <input type="text" name="name" id="name">
    <br>
    <input type="text" name="lastName" id="lastName">
    <br><br>
    <button type="submit" name="ButtonS">SendData</button>

    </form>

    <br><br>
    
</body>
</html>

<?php

include "class.php";

$person = new Person();

if(isset($_POST["ButtonS"])){

    $person->setData();
    $person->getData();

}

?>