<?php
require_once('config.php');
//insert query

    if (isset($_POST['save'])){
        $name = $_POST["Name"];
        $email = $_POST["Email"];
        $password = md5( $_POST["Password"]);

        $sql = "insert into user(name, email, password) 
                values('$name', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
           echo "<script> alert('inserted succesfully!')
           window.location.replace('http://localhost:8081/insert/display.php')
           </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }            
    }
$conn->close();
?>




