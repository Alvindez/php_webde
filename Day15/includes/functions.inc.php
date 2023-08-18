<?php

    function emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat) {
        $result;
        if (empty($name) || empty($emali) || empty($username)|| empty($pwd)  || empty($pwdrepeat)){
            $result= "true";
        }
        else {
            $result="false";
        }
        
        return $result;
    }


    function invalidUsername($username) {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            $result= "true";
        }
        else {
            $result="false";
        }
        
        return $result;
    }

    function invalidEmail($email) {
        $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result= "true";
        }
        else {
            $result="false";
        }
        
        return $result;
    }

    function pwdMatch($pwd,$pwdrepeat) {
        $result;
        if ($pwd !== $pwdrepeate){
            $result= "true";
        }
        else {
            $result="false";
        }
        
        return $result;
    }

    function usernameExists($connect, $username) {
      $sql ="SELECT* FROM user WHERE usersName = ? OR usersEmail = ?;";
      
      $stmt= mysqli_stmt_init($connect);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ("location: ../signuo.php?=stmtfailed");
        exit();
      }

      mysqli_stmt_bind_param($stmt, "ss", $username, $email);
      mysqli_stmt_execute($stmt);

      $resultData = mysqli_stmt_GET_result($stmt);

      if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
      }
      else {
        $result = "false";
        return "$result";
      }

      mysqli_smt_close($stmt);
    }

    function createUser($connect, $name, $email,$username,$pwd) {
        $sql ="INSERT INTO user (usersName, usersEmail, userUsername, userPwd) VALUES (?, ?, ?, ?);";
        
        $stmt= mysqli_stmt_init($connect);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header ("location: ../signuo.php?=stmtfailed");
          exit();
        }

        $hashedPwd = mysqli_hash($pwd, PASSWORD_DEFAULT);
  
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username,$hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_smt_close($stmt);
        header ("location: ../signuo.php?error=none");
        exit();
  
        
  
        
      }