<?php
    $username="root";
    $password="";
    $hostname="localhost";
    $dbname="users";
    $dbconnect= mysqli_connect($hostname,$username,$password,$dbname);
    if($dbconnect->connect_error){
     die("unable to connect to MySQL".$dbconnect->connect_error);
    echo "connected to MySQL";
    }
    else
    echo "connection sucessful"

?>