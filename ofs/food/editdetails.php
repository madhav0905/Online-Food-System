<?php

require 'includes/connect.php';
?>
<?php
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $first_name = $_POST['nam'];
  $contact = $_POST['contact'];
  $add = $_POST['tarea'];
  $emi=$_POST['email'];
  $sql = "UPDATE signup SET fname = '$first_name', contact='$contact',email='$emi',faddress='$add' WHERE username = '$user';";
  
if ($conn->query($sql) === TRUE) {
   header("location:details.php?message=<div id='sc'><i class='fa fa-check-circle'></i>Successfully Edited!</div>");
  } else {
  
   
    header("location:details.php?message=<div id='fl'><i class='fa fa-exclamation-circle'></i>This email already exists!</div>");
      

  }
  ?>
 