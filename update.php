<?php
require_once('config.php');
if (isset($_POST['update'])){
  $id=$_POST['id'];
  $name = $_POST["Name"];
  $email = $_POST["Email"];
  $password = md5($_POST["Password"]);

  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "UPDATE user SET name ='$name',email='$email', password='$password'  WHERE id=$id";
  
  if ($conn->query($sql) === TRUE) {
    echo "<script> alert('updated succesfully!')
           window.location.replace('http://localhost:8081/insert/display.php')
           </script>";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
  $conn->close();
}
?>