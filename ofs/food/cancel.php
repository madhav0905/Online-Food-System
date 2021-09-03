<?php

require 'includes/connect.php';

?>
<?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $s="SELECT * FROM final WHERE  id = ( SELECT MAX(id) FROM final where user='$user') and user='$user'";

    $result = $conn->query($s);
    while($row = $result->fetch_row())
    {

            $j=$row[0];
            for($i=0;$i<21;$i=$i+1)
            {
              $array[$i]=$row[$i+2];
            }
            $sum=$row[21];
           ?>
  
    
<?php

$sql = "SELECT date as d FROM final WHERE id = ( SELECT MAX(id) FROM final where user='$user') and user='$user' ";
$result = $conn->query($sql);
$b="Jan 5, 2022 15:37:25";
while($row = $result->fetch_assoc())
{
$b=$row['d'];
}

$sq="SELECT DATE_ADD('$b', INTERVAL 1 MINUTE) as e";  ;
$resul = $conn->query($sq);
$bb="Jan 5, 2022 15:37:25";
while($ro = $resul->fetch_assoc())
{

$bb=$ro['e'];


}

?>
<!DOCTYPE html>
 <html>
 <head>
      <meta charset="utf-8">
 <title>Cancel Order</title>
     <link rel=stylesheet href=cart.css>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
     
     <script src="jquery.js"></script>
 </head>
 <body>
         <div id="box">
                 <img id=logo src="images/3.png">
             <h1 id="head1">Welcome to HMKV</h1>
             <h2 id="head2">Feel the taste of food</h2>
            
         </div>
  
         <div id=starter style="margin-left:20%;width:60%;">
  <h1 style="color:darkblue;">Order Summary</h1>
  <?php   $arr=["","Tomato Soup","","Manchurian","","Paneer Tikka","","Butter Naan","","Palak Panneer","","Panneer Butter Masala","","Schezwan Friedrice","","Biryani","","Hakka Noodles"]; 
?>

<table>

<tr>
  <th>Item</th>
  <th>Price</th>
  <th>Quantity</th>
    <th>Total</th>

</tr>

<?php

for($j=1;$j<18;$j=$j+2)
{
if($array[$j]!=0)
{ 
?>
<tr>
<td>

<?php 
echo $arr[$j];
?>

</td>
<td>
<?php 
echo $array[$j-1];
?>
</td>
<td>
<?php 
echo $array[$j];
?>
</td>
<td>
<?php 
echo ($array[$j-1]*$array[$j]) ;
?>

</td>

</tr>
<?php

}



}
?>
<tr>
<td id="lb" style="border:none;"></td>
<td id="lb" style="border:none;"></td>
<td id="lb" style="color:green;text-align:right;border:none;">Delivery Charges:</td>
<td id="lc" style="border:none;color:green;"><?php $b=30;echo $b?></td>
</tr>
<tr>
<td id="ld" style="border:none;"></td>
<td id="ld" style="border:none;"></td>
<td id="ld" style="color:green;text-align:right;border:none;">Taxes and Charges:</td>
<td id="le" style="border:none;color:green;"><?php $c=10;echo $c?></td>
</tr>

<tr  >
<td id="la"></td>

<td id="la"></td>
<td id="la">Total Amount:</td>
<td id="ls"><?php
?>
<input type="text" style="outline:none;border:none;text-align:center;font-weight:bold;color:green;" name="total" value=<?php echo "$sum";?> readonly>
<?php

?></td>
</tr>

</table>
<hr>
           </div>            
<?php
   }



?>

    

         <div id="demo"></div>

<form action="cancelorder.php" method="post">
<button style="margin-left:47%;margin-top:0%; 
    border-radius: 16px;
width: 8%;
font-weight: bold;">Cancel Order</button>
</form>
<style>
#demo{
  color:brown;
  font-weight:bold;
margin-top:5%;
  margin-left:40%;
  
  padding:4%;
  padding-bottom:1%;

}

</style>

<script>


var countDownDate = new Date("<?php echo $bb?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
 
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"

    
  // If the count down is over, write some text 
  if (distance <=0) {
    clearInterval(x);
    location.href="trackorder.php";
  }
  else
  document.getElementById("demo").innerHTML ="Cancel order within "+minutes + " m " + seconds + "s ";
}, 1000);


</script>




