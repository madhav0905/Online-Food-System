<?php
require 'includes/connect.php';

$sql = "SELECT * from signup where username='$user' ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{  $un=$row["username"];
   $em=$row["email"];
   $fn=$row["fname"];
    $fd=$row["faddress"];
    $co=$row["contact"];
}

?>
 <!DOCTYPE html>
 <html>
 <head>
      <meta charset="utf-8">
 <title>User Login</title>
     <link rel=stylesheet href=details.css>
   
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
               
               <i class="fa fa-user-circle" style="font-size:70px;color:rgb(56, 5, 5);margin-top:2.2%;"></i> &nbsp; <h4 id=head3>Hi <?php echo "$fn"?> </h4>
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
         <div id="box1">
           <h2 style="color:brown;padding-left:2%;padding-top:2%;">My Account </h2>
          <button style="color:white;background-color:#0F52BA;float:right;margin-right:2%;margin-top:-3.5%; border-radius: 10px;cursor:pointer;" onclick="location.href='ep.php'">Change Password</button>
</div>
         <div id="mainblock" >
         <form id="fo" action="editdetails.php" method="POST" onsubmit="fn()" >
          <label for="user">Username:</label>&nbsp;
          <input type="text" name="user" value="<?php echo "$un"?>" readonly><br> 
          <br>

          <label for="nam">Name:</label>&nbsp; &nbsp;&nbsp; &nbsp;
          <input type="text" name="nam" value="<?php echo "$fn" ?>" pattern="[A-Za-z]+.{1,}" required maxlength="15"><br>
          <br>
          <label for="email">Email:</label>&nbsp; &nbsp;&nbsp; &nbsp;
          <input type="email"  value="<?php echo "$em"?>" name="email"  pattern="[A-Za-z]+.{1,}" ><br>
          <br>
          <label for="contact">Contact:</label>&nbsp; &nbsp;
          <input type="tel"  name="contact"  value="<?php echo "$co"?>" pattern="[0-9]{10}" minlength="10" maxlength="10" required ><br>
          <br>
          <label for="address">Address:</label>&nbsp; &nbsp;
           <input type="text"  name="tarea"  value=" <?php echo "$fd"?>" pattern="[A-Za-z0-9\s]+.{1,}" minlength="5" maxlength="100" required ><br>
          <br>
          <?php
          if(isset($_GET['message']))
{
  $msg=$_GET['message'];
  
   echo "$msg";
}
    ?>     
       
  
  
          <input type="submit" id="bt" value="Edit" onclick="fn()">
         
         </form>

         </div>
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
         <script src="user.js"></script>
 </body>
 </html>

