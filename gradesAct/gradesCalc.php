<?php

class grades{
    private $first;
    private $second;
    private $third;
    private $fourth;
    private $fifth;
    private $sexth;
    private $seventh;



    function setData(){
        $this->first = (float)$_POST['first'];
        $this->second = (float)$_POST['second'];
        $this->third = (float)$_POST['third'];
        $this->fourth = (float)$_POST['fourth'];
        $this->fifth = (float)$_POST['fifth'];
        $this->sexth = (float)$_POST['sexth'];
        $this->seventh = (float)$_POST['seventh'];
    }

    function add(){

        $total = $this->first+$this->second+$this->third+$this->fourth+$this->fifth+$this->sexth+$this->seventh;
        $average = $total/7;

        echo "The average is ".$average;
    }


}

?>