<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "ofs";
$conn= new mysqli($servername, $server_user, $server_pass, $dbname);

$d=$_SESSION["coun"];
?>