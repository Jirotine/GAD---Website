<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "gad";

$con = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(mysqli_connect_errno()){
    echo "Failed to Connect";
    die();
}