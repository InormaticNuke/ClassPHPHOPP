<?php

class Person{
    private $rut;
    private $name;
    private $lastName;


    function setData(){
        $this->rut = $_POST['rut'];
        $this->name = $_POST['name'];
        $this->lastName = $_POST['lastName'];
    }

    function  getData(){
        echo "<br>The Rut is: ".$this->rut."<br>The Name is: ".$this->name." ".$this->lastName;
    }


}

?>