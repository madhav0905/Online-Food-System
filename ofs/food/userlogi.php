<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
<title>User Login</title>
    <link rel=stylesheet href=login.css>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

</head>
<body>
        <div id="box">
                <img id=logo src="images/3.png">
            <h1 id=head1>Welcome to HMKV</h1>
            <h2 id=head2>Feel the taste of food</h2>
           
        </div>
<div id="main">




<img src="images/images.png" id=avatar>
<div id="loginbox">
<form action="userlogin.php" method="POST" >
<label for="user">Username:</label>&nbsp; &nbsp;
<input type="text" name="user" required placeholder="Username" id="user1"><br> 
<br>
<label for="pass">Password:</label>&nbsp; &nbsp;
<input type="password" placeholder="password" name="pass" required id="pass">
<center><button id="button">Log In</button></center>

</form>
<p>Don't have account? &nbsp; <a href="signup.php" >Sign Up</a></p>

<a href="fp.html">Forgot Password?</a>
</div>







</div>






   
</body>
    <script src="login.js"></script>
</html>
