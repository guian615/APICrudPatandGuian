<?php
require_once('config.php');


//delelte query
$id=$_GET['id'];
$sql ="DELETE FROM user WHERE ID=$id";

if ($conn->query($sql) === TRUE) {
  echo "<script> alert('deleted succesfully!')
  window.location.replace('http://localhost:8081/insert/display.php')
  </script>";
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>