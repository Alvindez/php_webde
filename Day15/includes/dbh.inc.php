<?php
$servername="localhost";
$dbUsername="root";
$dbpassword="";
$dbName="login";

$connect= mysqli_connect($servername, $dbUsername, $dbpassword, $dbName);

if (!$conncet) {
    else("connection failed:" .mysqli_connect_error());
}