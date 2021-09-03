<?php

require 'includes/connect.php';
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
    
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
     
     <script src="jquery.js"></script>
 </head>
 <body>
         <div id="box">
                 <img id=logo src="images/3.png">
             <h1 id=head1>Welcome to HMKV</h1>
             <h2 id=head2>Feel the taste of food</h2>
            
         </div>

         <div>
         <form id="fo" action="ch.php" method="POST" >
          
          <label for="old">Enter current password:</label>&nbsp; &nbsp;&nbsp; &nbsp;
          <input type="password" name="old"  placeholder="Current password" minlength="8" required><br>
          <br>
          <label for="new">Enter new password:</label>&nbsp; &nbsp;&nbsp; &nbsp;
          <input type="password"   name="new"  placeholder="New password" minlength="8" required ><br>
          <br>
          <label for="connew">Confirm new password:</label>&nbsp; &nbsp;&nbsp; &nbsp;
          <input type="password"   name="connew"  placeholder="confirm password" minlength="8" required ><br>
          <br>
          <?php
          if(isset($_GET['message']))
{
  $msg=$_GET['message'];
  
   echo "$msg";
}
    ?>     
          <button id="butn">Change</button>
</form>
</div>
</body>
</html>