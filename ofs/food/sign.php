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
$first_name = $_POST['nam'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$add = $_POST['tarea'];

$sql = "INSERT INTO signup (username,pass,fname,email,contact,faddress)

VALUES ('$username','$pass','$first_name','$email','$contact','$add')";

if ($conn->query($sql) === TRUE) {
  ?>
  <script>
    location.href="userlogi.php";
    </script>
    <?php

} else {
  echo "Error: " . $conn->error;
    echo 'Go to <a href="signup.php">&nbsp;&nbsp; signup</a>';
 




}

$conn->close();




?>
