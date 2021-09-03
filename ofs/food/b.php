<?php
require 'includes/connect.php';
?>

<?php
$r=$_POST["id"];
$rate=$_POST["rate"];
$sql="INSERT INTO rating(id,rat) VALUES ('$r','$rate')";
if($conn->query($sql) === TRUE){
header("Location:orderhistory.php");
}
?>