<!DOCTYPE html>
<html>
    <head>
       <title>Home Page</title>
       <link rel="stylesheet"href="../bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet"href="/..styles.css">
       <link rel="stylesheet"href="../font--awesome.css">

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
        echo "<div class='container'>";
        echo "<div class='row'>";
        require_once "connect_database.php";
        $query="SELECT * FROM sales";
        $result= mysqli_query($dbconnect,$query);
        while ($data=mysqli_fetch_assoc($result)) {
            
            echo "<div class='col-md-3' style='border: 5px solid red'>";
            echo "<div class='card'>";
            echo "<h4 class='card-title'>" .$data['ItemName']."</h4>"."</br>" 

            ."<h6 class='card-subtitle mb-2 text-muted'>" .$data['ItemDescription']."</h6>" ."</br>" 
            ."<h6 class='card-subtitle mb-2 text-muted'>" .$data['Price']."</h6>" ."</br>" 
            ."<h6 class='card-subtitle mb-2 text-muted'>" .$data['Quantity']."</h6>" ."</br>" 


            . '<a href="updateform.php?id=' . $data['id'] .'"  class="btn btn-primary"> <i class="fas fa-edit"></i></a>'. 
             " " . '<a href="process_delete.php?id=' .$data['id'] .'"class="btn btn-sm btn-danger"
            onclick="return confirm(\'Are you sure you want to dele te this  record?\')">Delete</a>'. "<br />";
            echo "</div>";
            echo "</div>";

        }
            echo "</div>";
            echo "</div>";
        ?>
        <?php
        include 'includes/footer.html';
        ?>
        <script src="bootstrap/js/bootstrap.min.js"></script>

    </body>
</html>