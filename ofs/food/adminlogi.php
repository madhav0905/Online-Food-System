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


$sql = "SELECT*from admins where username='$username' and pass='$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>
<script>
location.href="adminfood.php";

</script>
 <?php
}
else{
    echo "username or password didnt match";
}
?>