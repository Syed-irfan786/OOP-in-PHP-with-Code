<?php

class Person{
    protected $name = "umair" ;
    private $age = "23";
    private $height = 5;


    public function owner(){
        $a = $this->name;
        return $a;
    }


}

class Student extends Person{


    public function name(){
        $n = $this->name;
        
        return $n ;
    }
}