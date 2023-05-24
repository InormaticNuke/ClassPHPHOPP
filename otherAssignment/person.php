<?php

class Person{
    private $rut;
    private $name;
    private $lastName;


    function setData($rut,$name,$lastName){
        $this->rut = $rut;
        $this->name = $name;
        $this->lastName = $lastName;
        return true;
    }

    function  getData(){
        return "<br>The Full name is: ".$this->name." ".$this->lastName."<br>The Rut is: ".$this->rut;
    }


}

?>