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
    <style>
  form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 50vh;
  }
</style>
</head>
<body>


<form action="" method="post" style="background-color: #f2f2f2; padding: 20px; border: 1px solid #ccc;">
  First Name: <input type="text" name="fname" style="padding: 5px; border: 1px solid #ccc;"><br>
  Last Name: <input type="text" name="lname" style="padding: 5px; border: 1px solid #ccc;"><br>
  Age: <input type="number" name="age" style="padding: 5px; border: 1px solid #ccc;"><br>
  <input value="add" name="sub" type="submit" style="background-color: #4CAF50; color: white; padding: 5px 10px; border: none; border-radius: 4px; cursor: pointer;">
  <input value="search" name="sub" type="submit" style="background-color: #008CBA; color: white; padding: 5px 10px; border: none; border-radius: 4px; cursor: pointer;">
  <input value="update" name="sub" type="submit" style="background-color: #008CBA; color: white; padding: 5px 10px; border: none; border-radius: 4px; cursor: pointer;">
  <input value="delete" name="sub" type="submit" style="background-color: #008CBA; color: white; padding: 5px 10px; border: none; border-radius: 4px; cursor: pointer;">
  <input value="show" name="sub" type="submit" style="background-color: #008CBA; color: white; padding: 5px 10px; border: none; border-radius: 4px; cursor: pointer;">
</form>



    <?php 
    $sub = '';

    

    
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
    // $obj = new aa();
    // $obj->hello("David");
    // echo "<br>";
    // $obj->hi('David');
    // echo "<br>";
    // $obj->have('Car');



    //Abstract class and method example , we cant direct access and made object of an abstract class
    // $object = new Payment();
    // $object->paypal();
    // $object->Rupees();
    

    //Connecting to a Database

    $object = new Test();
    // $object->getUsers();

    if(isset($_POST['sub'])){
      $sub = $_POST['sub'];

    if($sub=="add"){
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $age = $_POST['age'];
        $object->add($firstName,$lastName,$age);

    }
    elseif($sub=="search"){
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $object->getUsersByName($firstName,$lastName);

    }

    elseif($sub=="update"){
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $age = $_POST['age'];
        $object->update($firstName,$lastName, $age);
    }
    elseif($sub=="delete"){
      $firstName  =$_POST['fname'];
      $lastName = $_POST['lname'];

      $object->delete($firstName, $lastName);
    }
    elseif($sub=="show"){
      $object->getUsers();
    }


    }


    








?>
    
</body>
</html>