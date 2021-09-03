<?php

require 'includes/conn.php';
?>


<?php
$arr=array("tsr","mar","ptr","bnr","ppr","pbr","sfr","br","hnr");
$ar=array("tav","mav","ptav","bnav","ppav","pbav","sfav","bav","hnav");
$arp=array("tsp","manp","ptp","bnp","ppp","pbp","sfp","bp","hnp");
$ara=array("tsa","mana","pta","bna","ppa","pba","sfa","ba","hna");
$a=array();
$b=array();
for($i=0;$i<9;$i++)
{
$a[$i]=$_POST[$arr[$i]];
}
for($i=0;$i<9;$i++)
{
$b[$i]=$_POST[$ar[$i]];
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  for($i=0;$i<9;$i++)
  {
$sq="UPDATE updt SET  $arp[$i]=$a[$i]";
$s="UPDATE updt SET  $ara[$i]=$b[$i]";
if ($conn->query($sq) === TRUE) {
    if($conn->query($s) === TRUE){
    header("Location:adminfood.php");
    }
}
else
echo "ram";
  }













?>