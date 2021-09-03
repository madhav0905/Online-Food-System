
<?php

require 'includes/connect.php';


$sql = "SELECT * FROM temp WHERE id = ( SELECT MAX(id) FROM temp where user='$user') and user='$user' ";
$result = $conn->query($sql);
$em=0;
$fe=0;
 $fi=0;
 $m1=0;
 $m2=0;
 $m3=0;
 $r1=0;
 $r2=0;
 $r3=0;

while($row = $result->fetch_row())
{ 
   $em=$row[3];
   $fe=$row[5];
    $fi=$row[7];
    $m1=$row[9];
    $m2=$row[11];
    $m3=$row[13];
    $r1=$row[15];
    $r2=$row[17];
    $r3=$row[19];
    
   
}

$sql = "SELECT * FROM updt";
$result = $conn->query($sql);
$arra=array();
$arra[0]=22;
while($row = $result->fetch_row())
{ for($i=1;$i<19;$i++)
   $arra[$i]=$row[$i];
   
}


?>
<!DOCTYPE html>
 <html>
 <head>
      <meta charset="utf-8">
 <title>User Login</title>
     <link rel=stylesheet href=starter.css>
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
         <div id="lo"><img id=logo src="images/3.png"></div>

         <div id="sidebar">
         <div id="profile">
               
               <i class="fa fa-user-circle" style="font-size:70px;color:rgb(56, 5, 5);margin-top:2.2%;"></i> &nbsp; <h4 id="head3">Hi <?php echo "$name" ?></h4>
               <button class="dropdown-btnn"> <i class="fa fa-caret-down" id="btn1"></i></button>
               <div class="dropdown-containerr">
              <a id="c" href="details.php">My Account </a>
                <a id="c" href="userlogi.php" >Log Out</a>

</div>
</div> 
<div style="background-color:orange">
       <button  class="dropdown-btn" ><i class="fa fa-edit" style="font-size:20px;color:brown;float:left"></i>Order
                 <i class="fa fa-caret-down"></i>
               </button>
               <div class="dropdown-container">
                 <a id="a" href="#box1">Starters </a>
                 <a id="a" href="#box2" >Main course</a>
                 <a id="a" href="#box3">Rice&amp;Noodles</a>
                 
               </div>
 
             <a id="b" href="cartt.php"><i class="fa fa-shopping-cart" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>Cart </a>
             <a href="orderhistory.php" ><i class="fa fa-calendar" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>Order history</a>
             <a  href="trackorder.php"><i class="fa fa-map-marker" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>Track order</a>
             <a  href="abouthotel.php"><i class="fa fa-info-circle" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>About Us</a>
             <footer style="margin-top:90%;margin-left:2%;color:brown;font-weight:bold;">&copy;Copyrights Reserved 2021</footer>
</div> 
         </div>
         <div id="box1">
           <h2 style="color:brown;padding-left:2%;padding-top:2%;margin-top:0%;">Starters </h2>
</div>
<div id=starter>
  <form id="f1" action="cart.php" method="POST" >
  <table>
<tr>
<th>Item</th>
<th>Image</th>
<th>Price(₹)</th>
<th>Qty</th>
</tr>
<?php
if($arra[2]==-1)
{
  ?>
  
  <tr style="opacity:0.4;" >
  <td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Tomato Soup" name="ts" readonly></td>
  <td style="height:100px;width:100px"><img style="width:250px;"src="images/11.jpg"></td>
  <td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[1]" ?> name="tsp" readonly></td>
  <td style="height:100px;width:150px"><input type="button" value="+" />
    <input id="it"type="text" name="tsq"value=<?php echo "$em" ?> size="2" readonly/>
    <input type="button"  value="-" /></td>
  </tr>
  <?php } else { 
    ?>

<tr >
<td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Tomato Soup" name="ts" readonly></td>
<td style="height:100px;width:100px"><img style="width:250px;"src="images/11.jpg"></td>
<td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[1]" ?> name="tsp" readonly></td>
<td style="height:100px;width:150px"><input type="button" value="+" onclick="add('it')"/>
  <input id="it"type="text" name="tsq"value=<?php echo "$em" ?> size="2" readonly/>
  <input type="button"  value="-" onclick="sub('it')"/></td>
</tr>

<?php } ?>
<?php
if($arra[4]==-1)
{
  ?>
  <tr style="opacity:0.4;" >
<td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Manchurian" name="mn" readonly></td>
<td style="height:100px;width:100px"><img style="width:270px;"src="images/12.jpg"></td>

    <td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[3]" ?> name="manp" readonly></td>
    <td style="height:100px;width:150px"><input type="button" value="+" />
      <input id="it1"type="text" name="manq"value=<?php echo "$fe" ?>  size="2" readonly/>
      <input type="button"  value="-" /></td>
    </tr>
    <?php } else { 
    ?>

<tr>
<td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Manchurian" name="mn" readonly></td>
<td style="height:100px;width:100px"><img style="width:270px;"src="images/12.jpg"></td>

    <td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[3]" ?>  name="manp" readonly></td>
    <td style="height:100px;width:150px"><input type="button" value="+" onclick="add('it1')"/>
      <input id="it1"type="text" name="manq"value=<?php echo "$fe" ?>  size="2" readonly/>
      <input type="button"  value="-" onclick="sub('it1')"/></td>
    </tr>
    <?php } ?>
    <?php
if($arra[6]==-1)
{
  ?>
   <tr style="opacity:0.4;" >
    <td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Paneer Tikka" name="pk" readonly></td>
    <td style="height:100px;width:100px"><img src="images/13.jpg"></td>
    
        <td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[5]" ?>  name="ptp" readonly></td>
        <td style="height:100px;width:150px"><input type="button" value="+" />
          <input id="it2"type="text" name="ptq"value=<?php echo "$fi"?> size="2" readonly/>
          <input type="button"  value="-" /></td>
        </tr>
        <?php } else { 
    ?>
    <tr>
    <td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Paneer Tikka" name="pk" readonly></td>
    <td style="height:100px;width:100px"><img src="images/13.jpg"></td>
    
        <td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[5]" ?> name="ptp" readonly></td>
        <td style="height:100px;width:150px"><input type="button" value="+" onclick="add('it2')"/>
          <input id="it2"type="text" name="ptq"value=<?php echo "$fi"?> size="2" readonly/>
          <input type="button"  value="-" onclick="sub('it2')"/></td>
        </tr>
        <?php } ?>
   
  </table>
  
  </div>

<div id="box2">
           <h2 style="color:brown;padding-left:2%;padding-top:2%;margin-top:0%;">Main Course </h2>
</div>
<div id=main>
  <form id="f2" method="POST" >
  <table>
<tr>
<th>Item</th>
<th>Image</th>
<th>Price(₹)</th>
<th>Qty</th>
</tr>
<?php
if($arra[8]==-1)
{
  ?>
    <tr style="opacity:0.4;" >
  <td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Butter naan" name="ts" readonly></td>
  <td style="height:100px;width:100px"><img style="width:250px;"src="images/15.jpg"></td>
  <td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[7]" ?>  name="msp1" readonly></td>
  <td style="height:100px;width:150px"><input type="button" value="+" />
    <input id="mn1"type="text" name="mn1q"value=<?php echo "$m1" ?> size="2" readonly/>
    <input type="button"  value="-" /></td>
  </tr>
  <?php } else { 
    ?>
<tr>
<td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Butter naan" name="ts" readonly></td>
<td style="height:100px;width:100px"><img style="width:250px;"src="images/15.jpg"></td>
<td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[7]" ?>  name="msp1" readonly></td>
<td style="height:100px;width:150px"><input type="button" value="+" onclick="add('mn1')"/>
  <input id="mn1"type="text" name="mn1q"value=<?php echo "$m1" ?> size="2" readonly/>
  <input type="button"  value="-" onclick="sub('mn1')"/></td>
</tr>
<?php } ?>
<?php
if($arra[10]==-1)
{
  ?>
 <tr style="opacity:0.4;" >
<td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Palak panneer" name="mn" readonly></td>
<td style="height:100px;width:100px"><img style="width:270px;"src="images/16.jpg"></td>

    <td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[9]" ?>  name="msp2" readonly></td>
    <td style="height:100px;width:150px"><input type="button" value="+" />
      <input id="mn2"type="text" name="mn2q"value=<?php echo "$m2" ?>  size="2" readonly/>
      <input type="button"  value="-" /></td>
    </tr>

    <?php } else { 
    ?>


<tr>
<td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Palak panneer" name="mn" readonly></td>
<td style="height:100px;width:100px"><img style="width:270px;"src="images/16.jpg"></td>

    <td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[9]" ?>  name="msp2" readonly></td>
    <td style="height:100px;width:150px"><input type="button" value="+" onclick="add('mn2')"/>
      <input id="mn2"type="text" name="mn2q"value=<?php echo "$m2" ?>  size="2" readonly/>
      <input type="button"  value="-" onclick="sub('mn2')"/></td>
    </tr>
    <?php } ?>
<?php
if($arra[12]==-1)
{
  ?>
  <tr style="opacity:0.4;" >
    <td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Panneer Butter Masala" name="pk" readonly></td>
    <td style="height:100px;width:100px"><img src="images/18.jpg"></td>
    
        <td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[11]" ?>  name="msp3" readonly></td>
        <td style="height:100px;width:150px"><input type="button" value="+" />
          <input id="mn3"type="text" name="mn3q"value=<?php echo "$m3"?> size="2" readonly/>
          <input type="button"  value="-" /></td>
        </tr>
        <?php } else { 
    ?>

    <tr>
    <td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Panneer Butter Masala" name="pk" readonly></td>
    <td style="height:100px;width:100px"><img src="images/18.jpg"></td>
    
        <td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[11]" ?>  name="msp3" readonly></td>
        <td style="height:100px;width:150px"><input type="button" value="+" onclick="add('mn3')"/>
          <input id="mn3"type="text" name="mn3q"value=<?php echo "$m3"?> size="2" readonly/>
          <input type="button"  value="-" onclick="sub('mn3')"/></td>
        </tr>
       
        <?php } ?>
  </table>




</div>
<div id="box3">
           <h2 style="color:brown;padding-left:2%;padding-top:2%;margin-top:0%;">Rice &amp; Noodles </h2>
</div>
<div id="rn">
  <form id="f3" method="POST" >
  <table>
<tr>
<th>Item</th>
<th>Image</th>
<th>Price(₹)</th>
<th>Qty</th>
</tr>

<?php
if($arra[14]==-1)
{
  ?>
 <tr style="opacity:0.4;" >
<td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Schezwan Friedrice" name="ts" readonly></td>
<td style="height:100px;width:100px"><img style="width:250px;"src="images/19.jpg"></td>
<td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[13]" ?>  name="rsp1" readonly></td>
<td style="height:100px;width:150px"><input type="button" value="+" />
  <input id="rn1"type="text" name="rn1q"value=<?php echo "$r1" ?> size="2" readonly/>
  <input type="button"  value="-" /></td>
</tr>

<?php } else { 
    ?>
    <td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Schezwan Friedrice" name="ts" readonly></td>
<td style="height:100px;width:100px"><img style="width:250px;"src="images/19.jpg"></td>
<td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[13]" ?>  name="rsp1" readonly></td>
<td style="height:100px;width:150px"><input type="button" value="+" onclick="add('rn1')"/>
  <input id="rn1"type="text" name="rn1q"value=<?php echo "$r1" ?> size="2" readonly/>
  <input type="button"  value="-" onclick="sub('rn1')"/></td>
</tr>
<?php } ?>
<?php
if($arra[16]==-1)
{
  ?>
  <tr style="opacity:0.4;" >
  <td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Biryani" name="mn" readonly></td>
<td style="height:100px;width:100px"><img style="width:270px;"src="images/20.jpg"></td>

    <td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[15]" ?>  name="rsp2" readonly></td>
    <td style="height:100px;width:150px"><input type="button" value="+" />
      <input id="rn2"type="text" name="rn2q"value=<?php echo "$r2" ?>  size="2" readonly/>
      <input type="button"  value="-" /></td>
    </tr>
    <?php } else { 
    ?>

<tr>
<td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Biryani" name="mn" readonly></td>
<td style="height:100px;width:100px"><img style="width:270px;"src="images/20.jpg"></td>

    <td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[15]" ?>  name="rsp2" readonly></td>
    <td style="height:100px;width:150px"><input type="button" value="+" onclick="add('rn2')"/>
      <input id="rn2"type="text" name="rn2q"value=<?php echo "$r2" ?>  size="2" readonly/>
      <input type="button"  value="-" onclick="sub('rn2')"/></td>
    </tr>
    <?php } ?>
    <?php
if($arra[18]==-1)
{
  ?>
    <tr style="opacity:0.4;" >
    <td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Hakka Noodles" name="pk" readonly></td>
    <td style="height:100px;width:100px"><img src="images/21.jpg"></td>
    
        <td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[17]" ?>  name="rsp3" readonly></td>
        <td style="height:100px;width:150px"><input type="button" value="+" />
          <input id="rn3"type="text" name="rn3q"value=<?php echo "$r3"?> size="2" readonly/>
          <input type="button"  value="-" /></td>
        </tr>
        <?php } else { 
    ?>
    <tr>
    <td ><input style="font-size:large;font-weight:bold; border:none; text-align:center; outline:none; " type="text" value="Hakka Noodles" name="pk" readonly></td>
    <td style="height:100px;width:100px"><img src="images/21.jpg"></td>
    
        <td><input style="border: none; outline:none;" size="2" type="text" value=<?php echo "$arra[17]" ?>  name="rsp3" readonly></td>
        <td style="height:100px;width:150px"><input type="button" value="+" onclick="add('rn3')"/>
          <input id="rn3"type="text" name="rn3q"value=<?php echo "$r3"?> size="2" readonly/>
          <input type="button"  value="-" onclick="sub('rn3')"/></td>
        </tr>
        <?php } ?>
   
  </table>




</div>


<div id="ad">
<input type="submit" style="color:brown;float:right;margin-top:-25%;width:100px;margin-right:15%;font-weight:bold;"  value="Add to Cart"/> 
</div>
</form>
</form>
</form>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="starter.js">
</script>
 </body>
 </html>