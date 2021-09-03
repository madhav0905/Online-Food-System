<?php

require 'includes/connect.php';
?>
<?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


$top=$_POST["tsp"];
$tq=$_POST["tsq"];
$ma=$_POST["manp"];
$maw=$_POST["manq"];
$ptw=$_POST["ptp"];
$pte=$_POST["ptq"];
$mzp=$_POST["msp1"];
$mzq=$_POST["mn1q"];
$myp=$_POST["msp2"];
$myq=$_POST["mn2q"];
$mxp=$_POST["msp3"];
$mxq=$_POST["mn3q"];
$rzp=$_POST["rsp1"];
$rzq=$_POST["rn1q"];
$ryp=$_POST["rsp2"];
$ryq=$_POST["rn2q"];
$rxp=$_POST["rsp3"];
$rxq=$_POST["rn3q"];
$us=$user;


$sql = "INSERT INTO temp (user,Tomata,tp,manchu,map,pt,ptp,bnp,bnq,ppp,ppq,pbmp,pbmq,sfrp,sfrq,birp,birq,hnp,hnq)

VALUES ('$us','$top','$tq','$ma','$maw','$ptw','$pte','$mzp','$mzq','$myp','$myq','$mxp','$mxq','$rzp','$rzq','$ryp','$ryq','$rxp','$rxq')";
if ($conn->query($sql) === TRUE) {








  ?>
  <script>
 location.href = "cartt.php"; 
</script>

<?php
} else {
  echo "Error: " . $conn->error;
    echo 'Go to <a href="starter.php">&nbsp;&nbsp; signup</a>';

}

$conn->close();




?>

