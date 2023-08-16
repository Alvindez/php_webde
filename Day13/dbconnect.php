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
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $fName=$_POST["fisrtName"];
        $sName=$_POST["secondName"];
        $course=$_POST["course"];
        $email=$_POST["email"];
        $telephone=$_POST["telephone"];
    
        try {
            require_once "dbconnect.php";
            $query="INSERT INTO registration (fisrtName,secondName,course,email,telephone) VALUE "
    
            header("Loction:../contact.php");
            exit();
        } catch (PDOExecution $e){
            die("query failed:" . $e->getMessage());
        }
    }
    else {
        header("Location: ../contact.php");
        exit();
    }
?>