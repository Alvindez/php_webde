<?php
require_once "connect_database.php";

if (isset($_GET["id"]) && is_numeric($_GET["id"])){
    $id=$_GET["id"];
    
    $query="DELETE FROM sales WHERE id=?";
    $st=mysqli_prepare ($dbconnect, $query);
        mysqli_stmt_bind_param ($st, "i", $id);
        if(mysqli_stmt_execute($st)){
            mysqli_stmt_close($dbconnect);
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