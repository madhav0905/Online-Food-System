<?php

require 'includes/connect.php';

?>
<?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT * FROM temp WHERE id = ( SELECT MAX(id) FROM temp where user='$user') and user='$user'";
  $result = $conn->query($sql);
 
$array= array();
$sum=0;
for($k=1;$k<18;$k=$k+2)
{
  $array[$k]=0;
}
$arr=["","Tomato Soup","","Manchurian","","Paneer Tikka","","Butter Naan","","Palak Panneer","","Panneer Butter Masala","","Schezwan Friedrice","","Biryani","","Hakka Noodles"];
  while($row = $result->fetch_row())
  {
    for($i=0;$i<18;$i=$i+1)
    {
      $array[$i]=$row[$i+2];
    }
  
  }
  if($array[1]==0 and $array[3]==0 and $array[5]==0 and $array[7]==0 and $array[9]==0 and $array[11]==0 and $array[13]==0 and $array[15]==0 and $array[17]==0)
  {
    
  ?>
  <script>
 



 location.href = "ca.php"; 
</script>

<?php
    
      
    
  }
  else
  {

  
    ?>

  
  
  
<!DOCTYPE html>
 <html>
 <head>
      <meta charset="utf-8">
 <title>Cart</title>
     <link rel=stylesheet href="cart.css">
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
         <div id="sidebar">
         <div id="profile">
               
               <i class="fa fa-user-circle" style="font-size:70px;color:rgb(56, 5, 5);margin-top:2.2%;"></i> &nbsp; <h4 id="head3">Hi <?php echo "$name" ?></h4>
               <button class="dropdown-btnn"> <i class="fa fa-caret-down" id="btn1"></i></button>
               <div class="dropdown-containerr">
              <a id="c" href="details.php">My Account </a>
                <a id="c" href="userlogi.php" >Log Out</a>

</div>
</div> 
       <button  class="dropdown-btn" ><i class="fa fa-edit" style="font-size:20px;color:brown;float:left"></i>Order
                 <i class="fa fa-caret-down"></i>
               </button>
               <div class="dropdown-container">
                 <a id="a" href="starter.php">Starters </a>
                 <a id="a" href="starter.php" >Main course</a>
                 <a id="a" href="starter.php">Rice&amp;Noodles</a>
                 
               </div>
 
             <a id="b" href="cartt.php"><i class="fa fa-shopping-cart" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>Cart </a>
             <a href="orderhistory.php" ><i class="fa fa-calendar" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>Order history</a>
             <a  href="trackorder.php"><i class="fa fa-map-marker" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>Track order</a>
             <a  href="abouthotel.php"><i class="fa fa-info-circle" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>About Us</a>
             <footer style="margin-top:90%;margin-left:2%;color:brown;font-weight:bold;">&copy;Copyrights Reserved 2021</footer>
         </div>
        
<div id=starter>
  <h1 style="color:darkblue;">Cart</h1>
  <form id="f" action="place.php" method="POST">
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
$sum+=($array[$j-1]*$array[$j]);
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
<?php $sum=$sum+$b+$c;?>
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
<p style="color:brown;font-size=large;">Payment : Cash On Delivery</p>
<input type="submit" id= "b1" value="Place Order">

</form>



<input type="button"  onclick="f()"  id ="b2" value="Edit Order">



</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="cat.js"></script>

</body>
</html>

<?php


  }
?>
 
