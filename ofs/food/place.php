<?php

require 'includes/connect.php';
?>
<?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $a=$_POST['total'];
  $sql = "INSERT INTO final (id,user,Tomata,tp,manchu,map,pt,ptp,bnp,bnq,ppp,ppq,pbmp,pbmq,sfrp,sfrq,birp,birq,hnp,hnq)  
(SELECT * FROM temp WHERE id = ( SELECT MAX(id) FROM temp where user='$user') and user='$user') ";


$sqll="UPDATE final SET total = '$a' WHERE id = ( SELECT MAX(id) FROM temp where user='$user') and user='$user';";



  if ($conn->query($sql) === TRUE) {
    if($conn->query($sqll) === TRUE){
    
    }
    $sq = "DELETE FROM temp WHERE user='$user'";

    if ($conn->query($sq) === TRUE) {
    ?>
     <script>
    location.href="cancel.php";
    
    </script>
    <?php
    }
    else
    echo 'not deleted';
    ?>
  
<?php




  } else {
    echo "Error: " . $conn->error;
      echo 'Go to <a href="signup.php">&nbsp;&nbsp; signup</a>';
   
  
  
  
  
  }
?>


