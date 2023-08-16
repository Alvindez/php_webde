<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
        require_once "dbconnect.php";
        $query="SELECT * FROM registration";
        $result= mysqli_query($dbconnect,$query);
        while ($data=mysqli_fetch_assoc($result)) {
            echo "This is my first name" .  $data ['firstName'] . '<a href="updateform.php?id=' . $data['id'] .'"  class="btn btn-primary"> Edit</a>'. 
             " " . '<a href="process_delete.php?id=' .$data['id'] .'"class="btn btn-sm btn-danger"
            onclick="return confirm(\'Are you sure you want to delete this  record?\')">Delete</a>'. "<br />";
        
        }
        ?>
    </body>
</html>