<?php 
    // $username="root";
    // $password="";
    // $hostname="localhost";
    // $dbname="users";
    // $dbconnect= mysqli_connect($hostname,$username,$password,$dbname);

    // if (!$connect) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    // $query = "INSERT INTO registration (firstName, secondName, course, email, telephone) VALUES (?, ?, ?, ?, ?)";


    // $stmt = mysqli_prepare($connect, $query);


    // mysqli_stmt_bind_param($stmt, "sssss", $fName, $sName, $course, $email, $telephone);

    // Set the variables
    $fName = $_POST["firstName"];
    $sName = $_POST["secondName"];
    $course = $_POST["course"];
    $email = $_POST["email"];
    $tele = $_POST["telephone"];
    echo "this is the $fName";

    // // Execute the prepared statement
    // mysqli_stmt_execute($stmt);

    // // Close the statement and the connection
    // mysqli_stmt_close($stmt);
    // mysqli_close($connect);

?>
