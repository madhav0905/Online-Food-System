<?php
require 'includes/connect.php';
?>

<!DOCTYPE html>
 <html>
 <head>
      <meta charset="utf-8">
 <title>User Login</title>
     <link rel=stylesheet href=oh.css>
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
                 <a id="a" href="starter.php">Starters </a>
                 <a id="a" href="starter.php" >Main course</a>
                 <a id="a" href="starter.php">Rice&amp;Noodles</a>
                 
               </div>
 
             <a id="b" href="cartt.php"><i class="fa fa-shopping-cart" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>Cart </a>
             <a href="details.php" ><i class="fa fa-calendar" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>Order history</a>
             <a  href="trackorder.php"><i class="fa fa-map-marker" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>Track order</a>
             <a  href="abouthotel.php"><i class="fa fa-info-circle" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>About Us</a>
             <footer style="margin-top:90%;margin-left:2%;color:brown;font-weight:bold;">&copy;Copyrights Reserved 2021</footer>
</div> 
         </div>
     
<div id="box1"><h2>ORDER HISTORY</h2></div>
<div id="starter">

<?php

$sq = "UPDATE final SET status=4 WHERE status=3 and user='$user' ";
$array= array();
$j;
$sql="SELECT * FROM final WHERE  user='$user' and (status=-1 or status=4)";
if($conn->query($sq) === TRUE){
    $result = $conn->query($sql);
    while($row = $result->fetch_row())
    {

            $j=$row[0];
            $abcd=$row[0];
            for($i=0;$i<21;$i=$i+1)
            {
              $array[$i]=$row[$i+2];
            }
            $sum=$row[21];
           ?>
           <div >
           <form id="h" action="b.php" method="post">
            <p style="margin-left:0.7%;padding-top:1.2%;"><strong>Order Id:   <input style="border:none;outline:none;   background: bisque;" type="number" name="id" value="<?php echo $j ;?>" readonly></strong></p>
       
            <p style="margin-left:0.7%;"><strong>Date and time:<?php echo $array[18] ;?></strong></p>
           
            <p  style="margin-left:0.7%;"><strong>Status:<?php 
            if($array[20]==-1)
            echo "Cancelled By Customer";
            else
            echo "Delivered";
          
            ?></strong></p>
            
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


<?php
if($array[20]!=-1)
{
$sqlll="SELECT * FROM rating WHERE id=$abcd";
$resut = $conn->query($sqlll);
if ($resut->num_rows > 0) {
$rs;
  while($ro = $resut->fetch_assoc()) {
$rs=$ro["rat"];
}
?>
<p>Rated <?php echo $rs?>/5 </p>

<?php

}
else
{
?>

<div class="rate">


    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>


  </div>

<input type="submit"  value="Rate">
  </form>
  <?php
}?>
<br>
<hr>


           </div>

        
            
<?php


}
else
{
  ?>
  <br>
  <hr>
  <?php
}



    }

}

?>








</div>
<script src="user.js"></script>
<script >
  document.querySelector('#h').addEventListener('submit', function(e) {
    var form = this;
    e.preventDefault();
     form.submit();
      
      });

</script>
<style>
input[type="radio"]{visibility:hidden;}
.rate {
    float: left;
    height: 46px;
  
}
.rate:not(:checked) > input {
    position:absolute;
    
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}


  </style>
 </body>
 </html>

