<?php 
require_once "dbconnect.php";
    // }

    $query = "INSERT INTO registration (firstName, secondName, course, email, telephone) VALUES (?, ?, ?, ?, ?)";


    $st = mysqli_prepare($dbconnect, $query);
    if(!$st){
        die("prepare failed" .mysqli_error($dbconnect));
    }


    mysqli_stmt_bind_param($st, "sssss", $fName, $sName, $course, $email, $telephone);

    // Set the variables
    $fName = $_POST["firstName"];
    $sName = $_POST["secondName"];
    $course = $_POST["course"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    echo "this is the $fName";

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
