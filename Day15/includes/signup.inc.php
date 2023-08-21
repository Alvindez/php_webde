<?php

if (isset($_POST["submit"])) {
    
    $name= $_POST["usersName"];
    $email= $_POST["usersEmail"];
    $username= $_POST["userUsername"];
    $pwd= $_POST["userPwd"];
    $pwdrepeat= $_POST["pwdRepeat"];

    require_once'dbh.inc.php';
    require_once'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUsername($username) !== false) {
        header("location: ../signup.php?error=invalidusername");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($pwd,$pwdrepeat) !== false) {
        header("location: ../signup.php?error=incorrectpassword");
        exit();
    }

    if (pwdMatch($connect,$username) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($connect, $name, $email,$username,$pwd);




}
else{
    header("location: ../signup.php");
}