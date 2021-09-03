<?php

require 'userlogin.php';
?>
<?php
 $sql = "SELECT fname from signup where username='$username' and pass='$pass'";
 $result = $conn->query($sql);
 while($row = $result->fetch_assoc())
 {
     $prof=$row["fname"];
 }
 ?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
<title>User Login</title>
    <link rel=stylesheet href=order.css>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
                 <p>Hi <?php echo "$prof"?> </p>
                <i class='fa fa-user-circle'style='font-size:80px;color:brown;padding-top:5%'></i>
            </div>
            <button  class="dropdown-btn" ><i class='fa fa-edit' style='font-size:20px;color:brown;float:left'></i>Order
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-container">
                <a id="a" href="starter.php">Starters</a>
                <a id="a" href="starter.php" >Main Course</a>
                <a id="a" href="starter.php">Rice &amp; Noodles</a>
                
              </div>

            <a id="b" href="#is"><i class='fa fa-shopping-cart'style='font-size:20px;color:brown;float:left;padding-left:2%;'></i>Cart </a>
            <a href="orderhistory.php" ><i class='fa fa-calendar'style='font-size:20px;color:brown;float:left;padding-left:2%;'></i>Order history</a>
            <a  href="trackorder.php"><i class='fa fa-map-marker'style='font-size:20px;color:brown;float:left;padding-left:2%;'></i>Track order</a>
            <a  href="abouthotel.php"><i class="fa fa-info-circle" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>About Us</a>
            <footer style="margin-top:90%;margin-left:2%;color:brown;font-weight:bold;">&copy;Copyrights Reserved 2021</footer>
        </div>
        <script src="user.js"></script>
</body>
</html>