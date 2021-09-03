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
        
            <div id="create">
                <h1 id="h11">Create Account</h1>
                <form   action="sign.php" method="POST" >
                    <label for="user">Username:</label>&nbsp;
                    <input type="text" name="user" required placeholder="Username" minlength="5" ><br> 
                    <br>
                    <label for="pass">Password:</label>&nbsp; 
                    <input type="password" placeholder="password" name="pass" minlength="8" required ><br>
                    <br>
                    <label for="nam">Name:</label>&nbsp; &nbsp;&nbsp; &nbsp;
                    <input type="text" placeholder="Name " name="nam" pattern="[A-Za-z]+.{1,}" required ><br>
                    <br>
                    <label for="email">Email:</label>&nbsp; &nbsp;&nbsp; &nbsp;
                    <input type="email" placeholder="Email" name="email" required ><br>
                    <br>
                    <label for="contact">Contact:</label>&nbsp; &nbsp;
                    <input type="tel"  placeholder="Contact " name="contact" pattern="[0-9]{10}" minlength="10" maxlength="10" required ><br>
                    <br>
                    <label for="address">Address:</label>&nbsp; &nbsp;<br>
                    <textarea name="tarea" style="padding: 2%;
                    padding-left: 4%; padding-top: 5%; width:70%;height:5vh"></textarea>
                    
                    <button id="sign">Create</button>
                    </form>
              
            </div>



    </div>    




</body>
<script src="login.js">







    
</script>
</html>
