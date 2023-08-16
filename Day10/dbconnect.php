<?php
    $username="root";
    $password="";
    $hostname="localhost";
    $dbname="users";
    $dbconnect= new mysqli($hostname,$username,$password,$dbname);
    if($dbconnect->connect_error){
     die("unable to connect to MySQL");
    }
    echo "connected to MySQL";

?>