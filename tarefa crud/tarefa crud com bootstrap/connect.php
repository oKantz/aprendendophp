<?php 
$localhost    = "localhost";
$username     = "root";
$password     = "";
$dbname       = "samueldb"; 
$con = mysqli_connect("$localhost","$username","$password","$dbname");
if($con->connect_error) {    die("connection failed". $con->connect_error); }