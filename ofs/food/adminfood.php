<?php

require 'includes/conn.php';
?>
<?php
$_SESSION['coun']=0;

$sql = "SELECT * FROM updt";
$result = $conn->query($sql);
$arra=array();
$arra[0]=22;
while($row = $result->fetch_row())
{ for($i=1;$i<19;$i++)
   $arra[$i]=$row[$i];
   
}
for($i=2;$i<19;$i+=2)
{
    if($arra[$i]==1)
    {
        $arra[$i]="Available";
    
        }
            else
    $arra[$i]="Not Available";
}
?>

<!DOCTYPE html>
 <html>
 <head>
      <meta charset="utf-8">
 <title>Admin food</title>
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
               
               <i class="fa fa-user-circle" style="font-size:70px;color:rgb(56, 5, 5);margin-top:2.2%;"></i> &nbsp; <h4 id=head3>Hi root </h4>
               <button class="dropdown-btnn"> <i class="fa fa-caret-down" id="btn1"></i></button>
               <div class="dropdown-containerr">
              <a id="c" href="admindetails.php">My Account </a>
                <a id="c" href="adminlogin.php" >Log Out</a>

</div>
</div> 
             <a id="b" href="cartt.php"><i class="fa fa-shopping-cart" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>Admin food </a>
          
             <a  href="ados.php"><i class="fa fa-map-marker" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>status of order</a>
             <a  href="abouthotel.php"><i class="fa fa-info-circle" style="font-size:20px;color:brown;float:left;padding-left:2%;"></i>About Us</a>
             <footer style="margin-top:90%;margin-left:2%;color:brown;font-weight:bold;">&copy;Copyrights Reserved 2021</footer>
         </div>

<div id="ta">
    <form action="price.php" method="POST">
<table>
<tr>
    <th>Item</th>
    <th>Price</th>
    <th> option</th>
</tr>
<tr>
    <td>Tomato soup</td>
    <td><input name="tsr" type="number" value="<?php echo $arra[1];?>" required></td>
    <td><select id="abcd"  name="tav">
        <option value=<?php
        if($arra[2]=="Not Available")
        echo "-1";
        else
        echo "1";
        ?>><?php echo "$arra[2]"?></option>
        <option value=
        
        <?php
        if($arra[2]=="Not Available")
        echo "1";
        else
        echo "-1";
        ?>
   
        ><?php
        if($arra[2]=="Not Available")
        echo "Available";
        else
        echo "Not Available";
        ?>
        
        </option>
    </select></td>

</tr>

<tr>
    <td>Manchuria</td>
    <td><input type="number" name="mar" value="<?php echo $arra[3];?>"required></td>
    <td><select id="ava" name="mav">
    <option value=<?php
        if($arra[4]=="Not Available")
        echo "-1";
        else
        echo "1";
        ?>><?php echo "$arra[4]"?></option>
        <option value=
        
        <?php
        if($arra[4]=="Not Available")
        echo "1";
        else
        echo "-1";
        ?>
      
        ><?php
        if($arra[4]=="Not Available")
        echo "Available";
        else
        echo "Not Available";
        ?>
        
        </option>
    </select></td>

</tr>
<tr>
    <td>Paneer tikka</td>
    <td><input type="number" name=" ptr" value="<?php echo $arra[5];?>" required></td>
    <td><select id="ava" name="ptav">
    <option value=<?php
        if($arra[6]=="Not Available")
        echo "-1";
        else
        echo "1";
        ?>><?php echo "$arra[6]"?></option>
        <option value=
        
        <?php
        if($arra[6]=="Not Available")
        echo "1";
        else
        echo "-1";
        ?>
      
        ><?php
        if($arra[6]=="Not Available")
        echo "Available";
        else
        echo "Not Available";
        ?>
        
        </option>
    </select></td>

</tr>
<tr>
    <td>Butter Naan</td>
    <td><input type="number" name="bnr" value="<?php echo $arra[7];?>" required></td>
    <td><select id="ava" name="bnav">
    <option value=<?php
        if($arra[8]=="Not Available")
        echo "-1";
        else
        echo "1";
        ?>><?php echo "$arra[8]"?></option>
        <option value=
        
        <?php
        if($arra[8]=="Not Available")
        echo "1";
        else
        echo "-1";
        ?>
         
        ><?php
        if($arra[8]=="Not Available")
        echo "Available";
        else
        echo "Not Available";
        ?>
        
        </option>
    </select></td>

</tr>
<tr>
    <td>Palak Paneer</td>
    <td><input type="number" name="ppr" value="<?php echo $arra[9];?>" required></td>
    <td><select id="ava" name="ppav">
    <option value=<?php
        if($arra[10]=="Not Available")
        echo "-1";
        else
        echo "1";
        ?>><?php echo "$arra[10]"?></option>
        <option value=
        
        <?php
        if($arra[10]=="Not Available")
        echo "1";
        else
        echo "-1";
        ?>
        
        
        
        
        
        
        
        
        
        
        
        
        ><?php
        if($arra[10]=="Not Available")
        echo "Available";
        else
        echo "Not Available";
        ?>
        
        </option>
    </select></td>

</tr>
<tr>
    <td>Paneer Butter Masala</td>
    <td><input type="number" name="pbr" value="<?php echo $arra[11];?>" required></td>
    <td><select id="ava" name="pbav">
    <option value=<?php
        if($arra[12]=="Not Available")
        echo "-1";
        else
        echo "1";
        ?>><?php echo "$arra[12]"?></option>
        <option value=
        
        <?php
        if($arra[12]=="Not Available")
        echo "1";
        else
        echo "-1";
        ?>
        
        
        
        
        
        
        
        
        
        
        
        
        ><?php
        if($arra[12]=="Not Available")
        echo "Available";
        else
        echo "Not Available";
        ?>
        
        </option>
    </select></td>

</tr>
<tr>
    <td>Schewan Fried Rice</td>
    <td><input type="number" name="sfr" value="<?php echo $arra[13];?>" required></td>
    <td><select id="ava" name="sfav">
    <option value=<?php
        if($arra[14]=="Not Available")
        echo "-1";
        else
        echo "1";
        ?>><?php echo "$arra[14]"?></option>
        <option value=
        
        <?php
        if($arra[14]=="Not Available")
        echo "1";
        else
        echo "-1";
        ?>
        
        
        
        
        
        
        
        
        
        
        
        
        ><?php
        if($arra[14]=="Not Available")
        echo "Available";
        else
        echo "Not Available";
        ?>
        
        </option>
    </select></td>

</tr>
<tr>
    <td>Biryani</td>
    <td><input type="number" name="br" value="<?php echo $arra[15];?>" required></td>
    <td><select id="ava" name="bav">
    <option value=<?php
        if($arra[16]=="Not Available")
        echo "-1";
        else
        echo "1";
        ?>><?php echo "$arra[16]"?></option>
        <option value=
        
        <?php
        if($arra[16]=="Not Available")
        echo "1";
        else
        echo "-1";
        ?>
        
        
        
        
        
        
        
        
        
        
        
        
        ><?php
        if($arra[16]=="Not Available")
        echo "Available";
        else
        echo "Not Available";
        ?>
        
        </option>
    </select></td>

</tr>
<tr>
    <td>Hakka Noodles</td>
    <td><input type="number" name="hnr" value="<?php echo $arra[17];?>"required></td>
    <td><select id="ava" name="hnav">
    <option value=<?php
        if($arra[18]=="Not Available")
        echo "-1";
        else
        echo "1";
        ?>><?php echo "$arra[18]"?></option>
        <option value=
        
        <?php
        if($arra[18]=="Not Available")
        echo "1";
        else
        echo "-1";
        ?>
        
        
        
        
        
        
        
        
        
        
        
        
        ><?php
        if($arra[18]=="Not Available")
        echo "Available";
        else
        echo "Not Available";
        ?>
        
        </option>
    </select></td>

</tr>



</table>
<button style="margin-left: 40%; height: 2%;"  > Update</button>
</form>



</div>




<style>

#ta
{
    margin-left: 15%
    
}
table
{
    border: 5px solid green;
    width: 100%;
 height: 75vh;
}
td{
  
  border: 1px solid black;
  padding: 0%;
  text-align: center;
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  
}
th
{
  border: 2px solid brown;

}


</style>



         <script src="user.js"></script>
 </body>
 </html>
 