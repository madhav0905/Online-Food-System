<?php

require 'includes/connect.php';
?>
<?php

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$username=$_POST['user'];
$pass = $_POST['pass'];
$_SESSION['username'] = $username;

$sql = "SELECT*from signup where username='$username' and pass='$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   $s="DELETE from temp where user='$username'";
   if ($conn->query($s) === TRUE) {}
  $sql = "SELECT fname from signup where username='$username' and pass='$pass'";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc())
  {
      $prof=$row["fname"];
  }
	$_SESSION['fname'] = $prof;
?>
<script>
location.href="abouthotel.php";

</script>
 <?php
}
else{
    echo "username or password didnt match";
}
?>