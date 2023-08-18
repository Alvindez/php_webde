<!DOCTYPE html>
<html>
    <head>
        <center>
        <h1> UPDATE ITEMS HERE</h1>
        <br></br>
        <?php
        include '../includes/head.html';
        ?>
    </head>
    <body style="background-color: gray ; background-position: center;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
               
                    <?php
                    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                        $id=$_GET['id'];
                        require_once "connect_database.php";
                        $query="SELECT * FROM sales WHERE id=?";
                        $st= mysqli_prepare($dbconnect,$query);
                        mysqli_stmt_bind_param($st, "i",$id);
                        mysqli_stmt_execute($st);
                        $result= mysqli_stmt_get_result($st);
                        $data= mysqli_fetch_assoc($result);
                    
                    ?>
                    <!-- form for updating records -->
                    
                    <form action="processupdate.php" method="post">  
                    <input type="hidden" name="id" value= "<?php echo $data['id']; ?>">
                        <div class="mb-3">
                            <lable>Name</lable>
                            <input type="text" class="form control" name="ItemName"  placeholder="Enter Name" value= "<?php echo $data['ItemName']; ?>">
                        </div>
                        <br></br>

                        <div class="mb-3">
                            <lable>Description</lable>
                            <input type="text" class="form control" name="ItemDescription" placeholder="Describe Item" value= "<?php echo $data['ItemDescription']; ?>">
                        </div>
                        <br></br>

                        <div class="mb-3">
                            <lable>Price</lable>
                            <input type="text" class="form control" name="Price" placeholder="Enter Price" value= "<?php echo $data['Price']; ?>">
                        </div>
                        <br></br>

                        <div class="mb-3">
                            <lable>Quantity</lable>
                            <input type="text" class="form control" name="Quantity" placeholder="Enter Quantity" value= "<?php echo $data['Quantity']; ?>">
                        </div>
                        <br></br>
                        <button type="submit" class="btn btn-info">Submit</button>
                        
                        <?php
                        
                    }
                    ?>
                </div>
            </div>
            </center>
            <!-- footer -->
                
            
        </div>
        
    </body>
</html>