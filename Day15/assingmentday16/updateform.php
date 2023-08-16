<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet"href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet"href="styles.css">
        <link rel="stylesheet"href="font--awesome.css">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="text-transform:uppercase">
                <div class="container">
                    <a class="navbar-brand" href="#">My Website</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="home.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Profile.html">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Hobbies.html">Hobbies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Contact.html">Contact</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="assingmentday16/retrieve.php"> IMS App </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.html">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>
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

        <form action="processupdate.php" method="post">  
        <input type="hidden" name="id" value= "<?php echo $data['id']; ?>">
            <div class="mb-3">
                <lable>Name</lable>
                <input type="text" class="form control" name="ItemName"  placeholder="Enter Name" value= "<?php echo $data['ItemName']; ?>">
            </div>

            <div class="mb-3">
                <lable>Description</lable>
                <input type="text" class="form control" name="ItemDescription" placeholder="Describe Item" value= "<?php echo $data['ItemDescription']; ?>">
            </div>

            <div class="mb-3">
                <lable>Price</lable>
                <input type="text" class="form control" name="Price" placeholder="Enter Price" value= "<?php echo $data['Price']; ?>">
            </div>
            <div class="mb-3">
                <lable>Quantity</lable>
                <input type="text" class="form control" name="Quantity" placeholder="Enter Quantity" value= "<?php echo $data['Quantity']; ?>">
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
            
            <?php
            
        }
        ?>
        <?php
        include 'includes/footer.html';
        ?>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>