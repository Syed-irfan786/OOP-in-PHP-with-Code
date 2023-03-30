<?php

class Human{
    private $name;
    private $age;
    private $gender;
    public static $Count=0 ;
    //constructor and destructor
    public function __construct($n, $a, $g){
        echo ("constructor is called <br>");
        Human:: setCount(Human::$Count);
        $this->name = $n;
        $this->age = $a;
        $this->gender = $g;
    }

    public static function setCount(){
        self::$Count = self::$Count + 1 ;
        
    }

    public static function setCc($cc){
        self::$Count = $cc;
        
    }

    public function __destruct(){
        echo nl2br("Disctructor is called  ");
        }
    
    
        //Setter and Getter
    public function setName($n){
        $this->name = $n;
    }
   
    public function setAge($n){
        $this->age = $n;
    }
    public function setGender($n){
        $this->gender = $n;
    }

    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getGender(){
        return $this->gender;
    }



}
