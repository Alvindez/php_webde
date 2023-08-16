<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST["id"];
    $fName=$_POST["firstName"];
    $sName=$_POST["secondName"];
    $course=$_POST["course"];
    $email=$_POST["email"];
    $telephone=$_POST["telephone"];

    
    require_once "dbconnect.php";
    $query="UPDATE registration SET firstName=?,secondName=?,course=?,email=?,telephone=? WHERE id=?";

    $st=mysqli_prepare($dbconnect, $query);
    mysqli_stmt_bind_param($st, "sssssi" , $fName, $sName, $course, $email, $telephone, $id);
    if(mysqli_stmt_execute($st)){
        mysqli_stmt_close($st);
        header("Location: ../retrieve.php");
        exit();
    }

    header("Loction: retrieve.php");
    exit();
}
else {
    header("Location: ../Contact.php");
    exit();
}
?>