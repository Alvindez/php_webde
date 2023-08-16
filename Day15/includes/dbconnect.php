<?php
    $username="root";
    $password="";
    $hostname="localhost";
    $dbname="users";
    $dbconnect= mysqli_connect($hostname,$username,$password,$dbname);
    if(!$dbconnect) {
        die("connection failed:" . mysqli_connect_error());
    }
   
?>