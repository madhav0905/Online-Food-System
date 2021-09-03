
<?php
require 'includes/conn.php';

?>
<?php
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

for($i=1;$i<2*$d;$i+=2)
{
 $s=$i-1;
$sql="UPDATE final SET status='$_POST[$i]' WHERE id='$_POST[$s]' ";

if($conn->query($sql) === TRUE){

header("Location:ados.php");


}


}




















?>