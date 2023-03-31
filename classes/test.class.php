
<?php

class Test extends Dbh{
    public function getUsers(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while($row=$stmt->fetch()){
            echo $row['fname'] . " " . $row['lname'] . " " . $row['age'] .'<br>';
        }

    }


    public function getUsersByName($fn, $ln){
        $sql = "SELECT * FROM users WHERE fname = ? AND lname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fn, $ln]);
        $names = $stmt->fetchAll();


        foreach($names as $row)
        {
            echo $row['fname'] . " " . $row['lname'] . " " . $row['age'] .'<br>';
        }
        

    }

    

    public function add($firstName, $lastName, $age){
        $sql = "INSERT INTO users (fname, lname, age) VALUES ('$firstName', '$lastName', '$age')";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        echo "added successfully";
    }

    public function update($firstName, $lastName, $age){
        $sql = "UPDATE users SET age = '$age' WHERE fname = '$firstName' AND lname= '$lastName'";
       
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        echo "updated successfully" ;
    }

    public function delete($firstName, $lastName)
    {
        $sql = "DELETE FROM users WHERE fname='$firstName' AND lname='$lastName'";
        $stmt = $this->connect()->query($sql);
        $stmt->execute();
        echo "Deleted Successfully <br>";

    }
}