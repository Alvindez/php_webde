<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST["id"];
    $Name=$_POST["ItemName"];
    $Description=$_POST["ItemDescription"];
    $Price=$_POST["Price"];
    $Quantity=$_POST["Quantity"];

        require_once "connect_database.php";
        $query="UPDATE sales SET ItemName=?,ItemDescription=?,Price=?,Quantity=? WHERE id=?";

        $st=mysqli_prepare($dbconnect, $query);
        mysqli_stmt_bind_param($st, "ssssi", $Name, $Description, $Price, $Quantity, $id);
        if(mysqli_stmt_execute($st)){
            mysqli_stmt_close($st);
            header("Location: ./retrieve.php");
            exit();
        }
        header("Loction: ./contact.php");
        
}
else {
    header("Location: ./contact.php");
    exit();
}
?>