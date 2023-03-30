<?php
interface A{
    function hello($name);
}

interface B{
    function hi($name);
    function have($name);
}

class aa implements A, B {
    public function hello($name){
        echo "hello $name";
    }

    public function hi($name){
        echo "hi $name";
    }
    public function have($name){
        echo "have $name";
    }

}