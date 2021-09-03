<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "ofs";
$name = $_SESSION['fname'];
$user=$_SESSION['username'];

$conn= new mysqli($servername, $server_user, $server_pass, $dbname);
?>