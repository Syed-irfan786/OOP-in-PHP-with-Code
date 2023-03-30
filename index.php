<?php
include 'includes/autoloader.inc.php';
// include dirname(__FILE__) . '/oop/myclass.php';
// include dirname(__FILE__) . '/oop/incapsulation.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    //Inheritance example
    // $object  = new Person();
    // $object  = new Student();
    // echo  $object->name();


    
    //Incapsulation , getter and setter example
    // $obj = new Human();
    // $obj1 = new Human();
    // $obj->setName('incapsulation check');
    // $obj1->setName('incapsulation check 2');
    // echo nl2br($obj->getName() ."\n" );
    // echo $obj1->getName() ;



    //Constructor and Destructor example
    // $ob = new Human('irfan',23, "male");
    // echo nl2br($ob->getName() .' <br> '. $ob->getAge() . ' <br>' . $ob->getGender() . '<br>' );



    //use of Statid keyword and method
    // $obj = new Human('irfan', 23, 'male');
    // $obj1 = new Human('irfannn', 23, 'male');
    // Human :: setCc(4);
    // echo Human::$Count ;



    //Interface in php
    $obj = new aa();

    $obj->hello("David");
    echo "<br>";
    $obj->hi('David');
    echo "<br>";
    $obj->have('Car');





?>
    
</body>
</html>