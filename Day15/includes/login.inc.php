<?php
if (isset($_POST["submit"])) {
    $username = $_POST["usersName"];
    $pwd = $_POST["userPwd"];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../Login.php?error=emptyinput");
        exit();
    }

    loginusers($connect, $username, $pwd);
    
}

else{
    header("location: ../Login.php");
    exit();
}
