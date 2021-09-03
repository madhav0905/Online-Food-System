<?php

require 'includes/connect.php';

?>
<?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
$a=0;
$s="SELECT MAX(id) as c FROM final where user='$user'";
$result = $conn->query($s);
while($row = $result->fetch_assoc())
{

$a=$row['c'];

}
$sq="UPDATE final SET status=-1 where id ='$a' and user='$user';";
if ($conn->query($sq) === TRUE) {
header("Location:starter.php");
}
else
{
    echo "cant cancel order u have to pay";
}




?>

