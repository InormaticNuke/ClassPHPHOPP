<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body align="center">

    <form action="" method="post">

    <input type="text" name="rut" id="rut" placeholder="Rut">
    <br>
    <input type="text" name="name" id="name" placeholder="Name">
    <br>
    <input type="text" name="lastName" id="lastName" placeholder="Last Name">
    <br><br>
    <button type="submit" name="ButtonS">SendData</button>

    </form>

    <br><br>
    
</body>
</html>

<?php

include "person.php";

$person = new Person();

if(isset($_POST["ButtonS"])){

    $person->setData($_POST['rut'],$_POST['name'],$_POST['lastName']);
    $person->getData();
    $info = $person->getData();

    echo $person->getData();

}

?>