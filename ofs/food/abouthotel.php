<?php

require 'includes/connect.php';
?>



<!DOCTYPE html>
 <html>
 <head>
      <meta charset="utf-8">
 <title>About Us</title>
     <link rel=stylesheet href=order.css>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
     
     <script src="jquery.js"></script>
 </head>
 <body>
         <div id="box">
                 <img id=logo src="images/3.png">
             <h1 id=head1>Welcome to HMKV</h1>
             <h2 id=head2>Feel the taste of food</h2>
            
         </div>
         <div id="sidebar">
         <div id="profile">
               
               <i class="fa fa-user-circle" style="font-size:70px;color:rgb(56, 5, 5);margin-top:2.2%;"></i> &nbsp; <h4 id=head3>Hi <?php echo "$name"?> </h4>
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
                 <a id="a" href="starter.php" >Main Course</a>
                 <a id="a" href="starter.php">Rice&amp;Noodles</a>
                 
               </div>
 
             <a id="b" href="cartt.php"><i class="fa fa-shopping-cart" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>Cart </a>
             <a href="orderhistory.php" ><i class="fa fa-calendar" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>Order history</a>
             <a  href="trackorder.php"><i class="fa fa-map-marker" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>Track order</a>
             <a  href="abouthotel.php"><i class="fa fa-info-circle" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>About Us</a>
             <footer style="margin-top:90%;margin-left:2%;color:brown;font-weight:bold;">&copy;Copyrights Reserved 2021</footer>
         </div>
<div id="ab">


<h1 style="color: brown;text-align: center;">HMKV Restaurant</h1>
<p>HMKV Restaurant is one og the top retaurant in Vijayawada.It is famous for <strong>Veg Manchuria</strong>.</p>
<p>Timings of this hotel is from 5pm to 10pm.This Resturant has a beautiful Web Service where customers can go to their website and order their food.</p>
<p>The items are very tasty and also have a good quality of service.</p>
<p>Location of this restaurant is  Opposite to DV Manor,,Labbipet, Vijayawada</p>
<a href="starter.php">Order Food NOW !!!! </a>
</div>








         <script src="user.js"></script>
 </body>
 </html>
 