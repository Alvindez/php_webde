<?php 
require_once "connect_database.php";
    // }

    $query = "INSERT INTO sales (ItemName, ItemDescription, Price, Quantity) VALUES (?, ?, ?, ?)";


    $st = mysqli_prepare($dbconnect, $query);
    if(!$st){
        die("prepare failed" .mysqli_error($dbconnect));
    }


    mysqli_stmt_bind_param($st, "ssss", $Name, $Description, $Price, $Quantity);

    // Set the variables
    $Name = $_POST["ItemName"];
    $Description = $_POST["ItemDescription"];
    $Price = $_POST["Price"];
    $Quantity = $_POST["Quantity"];
    echo "this is the $Name";

    // Execute the prepared statement
    if(mysqli_stmt_execute($st)){
        echo "data inserted sucessfully";
    }
    else {
        die("execution failed" .mysqli_error($dbconnect));
    }
    mysqli_stmt_execute($st);

    // Close the statement and the connection
    mysqli_stmt_close($st);
    mysqli_close($dbconnect);

?>
