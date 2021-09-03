<?php

require 'includes/conn.php';
require 'includes/abc.php';
?>
<?php
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id,user,date,total,status FROM final WHERE status>-1 and status<3";
$sq="SELECT count(status) as co  from final  WHERE status>-1 and status<3" ;
$result = $conn->query($sql);
$resu = $conn->query($sq);
$a=0;
?>
<div style="margin-left:15%">
<form action="upd.php" method="POST">
<?php
while($row = $resu->fetch_assoc())
{

$a=$row['co'];

}
$_SESSION["coun"]=$a;


$b=0;?>

<table style="border:1px solid brown; width:98%;margin-left:1%;">
<tr>
<th>ORDER ID</th>
<th> USERNAME</th>
<th>ORDER TIME</th>
<th>TOTAL</th>
<th>ORDER STATUS</th>
</tr>


<?php
while($row = $result->fetch_row())
{
?>

<tr>
<td>
<?php
?>
   <input type="number" name="<?php echo $b?>" value="<?php echo $row[0] ?>" readonly> 
   <?php 
$b++;?>
<?php
?>
</td>
<td>
<?php
   echo $row[1];

?>
</td>

<td>
<?php
   echo $row[2];

?>
</td>
<td>
<?php
   echo $row[3];

?>
</td>
<td>
<?php
?>
 <input type="number" name="<?php echo $b?>" value="<?php echo $row[4] ?>">
 <?php 
$b++;?>
</td>

</tr>


 
<?php




}



?>
</table>
<button style="margin-left: 40%; height: 2%;"  > Update</button>


</form>

</div>
<style>
td{
  
  border: 1px solid green;
  padding: 0%;
  text-align: center;
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  
}
th
{
  border: 2px solid brown;

}


    </style>






