<?php

class Demo {

    private int $num1;
    private int $num2;
    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function add(){
        return $this->num1 + $this->num2;
    }
}