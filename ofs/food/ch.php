<?php

require 'includes/connect.php';
?>
<?php

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $pas=$_POST['old'];
$sp="SELECT pass from signup where username='$user' and pass='$pas'";
$result = $conn->query($sp);  
$npas=$_POST['new'];
$cnpas=$_POST['connew'];
$sr="UPDATE signup SET pass='$npas' where  username='$user' ";
if ($result->num_rows > 0) 
{
 if($npas===$cnpas)
 {
    if ($conn->query($sr) === TRUE) {
        ?>
        <script>
         var j="Password has been changed";
         if(confirm(j)){location.href="userlogi.php";}
            </script>
            <?php
    }
    else
    {
        echo "Server error!";
    }

 }
 else{
    header("location:ep.php?message=<div id='fal'><i class='fa fa-exclamation-circle'></i>Passwords didn't match!</div>");
 }
}
else{
    header("location:ep.php?message=<div id='fali'><i class='fa fa-exclamation-circle'></i>Your current password didn't match!</div>");
}?>