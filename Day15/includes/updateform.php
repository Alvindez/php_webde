<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet"href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"href="styles.css">
    </head>
    <body>
        <?php
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id=$_GET['id'];
            
            require_once "dbconnect.php";
            $query="SELECT * FROM registration WHERE id=?";
            $st= mysqli_prepare($dbconnect,$query);
            mysqli_stmt_bind_param($st, "i",$id);
            mysqli_stmt_execute($st);
            $result= mysqli_stmt_get_result($st);
            $data= mysqli_fetch_assoc($result);
        
        ?>

        <form action="includes/processupdate.php" method="post">  
        <input type="hidden" name="id" value= "<?php echo $data['id']; ?>">
            <div class="mb-3">
                <lable>firstName</lable>
                <input type="text" class="form control" name="firstName"  placeholder="Enter First Name" value= "<?php echo $data['firstName']; ?>">
            </div>

            <div class="mb-3">
                <lable>secondName</lable>
                <input type="text" class="form control" name="secondName" placeholder="Enter Second Name" value= "<?php echo $data['secondName']; ?>">
            </div>

            <div class="mb-3">
                <lable>course</lable>
                <input type="text" class="form control" name="course" placeholder="Enter Course Name" value= "<?php echo $data['course']; ?>">
            </div>
            <div class="mb-3">
                <lable>email</lable>
                <input type="text" class="form control" name="email" placeholder="Enter Email" value= "<?php echo $data['email']; ?>">
            </div>
            <div class="mb-3">
                <lable>telephone</lable>
                <input type="text" class="form control" name="telephone" placeholder="Enter Telephone no" value= "<?php echo $data['telephone']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">update</button>

            <?php
            
        }
        else {
            echo "there was an error" ;
        }
        ?>
    </body>
</html>