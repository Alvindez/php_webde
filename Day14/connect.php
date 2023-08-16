<?php 
require_once "dbconnect.php";
    // }

    $query = "INSERT INTO registration (firstName, secondName, course, email, telephone) VALUES (?, ?, ?, ?, ?)";


    $stmt = mysqli_prepare($dbconnect, $query);
    if(!$stmt){
        die("prepare failed" .mysqli_error($dbconnect));
    }


    mysqli_stmt_bind_param($stmt, "sssss", $fName, $sName, $course, $email, $telephone);

    // Set the variables
    $fName = $_POST["firstName"];
    $sName = $_POST["secondName"];
    $course = $_POST["course"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    echo "this is the $fName";

    // Execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo "data inserted sucessfully";
    }
    else {
        die("execution failed" .mysqli_error($dbconnect));
    }
    mysqli_stmt_execute($stmt);

    // Close the statement and the connection
    mysqli_stmt_close($stmt);
    mysqli_close($dbconnect);

?>
