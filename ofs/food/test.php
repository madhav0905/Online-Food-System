<?php

require 'includes/connect.php';
?>

<?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$u=$_POST['user'];
$sqr="SELECT fname,pass,email from signup where username='$u'";
$result = $conn->query($sqr);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())
  {
      $na=$row["fname"];
      $pa=$row["pass"];
      $ea=$row["email"];
  }

$recipient = $ea;
$sender = 'hmkvrestaurant@gmail.com';

$subject = "Password details";
$message = "Hi ".$na."\n\n"."Password for your account: ".$pa."\n\n";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    ?>
    <script>
        location.href="userlogi.php";
    </script>
    <?php
}
else
{
    echo "Wrong username!";
}
}
else{
    echo "Username doesn't exist!";
}
?>