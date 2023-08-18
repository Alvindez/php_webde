<!DOCTYPE html>
<html>
    <head>
       <title>Home Page</title>
       <link rel="stylesheet"href="../bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet"href="../styles.css">
       <link rel="stylesheet"href="../font--awesome.css">

    </head>
    <body>
        <?php
        include '../includes/nav.html';
        ?>




        <?php
        echo "<div class='container'>";
        echo "<div class='row'>";
        require_once "connect_database.php";
        $query="SELECT * FROM sales";
        $result= mysqli_query($dbconnect,$query);
        while ($data=mysqli_fetch_assoc($result)) {
            
            echo "<div class='col-md-3' style='border: 3px'>";
            echo "<div class='card'>";
            echo "<h4 class='card-title'>" .$data['ItemName']."</h4>"."</br>" 

            ."<h6 class='card-subtitle mb-2 text-muted'>" .$data['ItemDescription']."</h6>" ."</br>" 
            ."<h6 class='card-subtitle mb-2 text-muted'>" .$data['Price']."</h6>" ."</br>" 
            ."<h6 class='card-subtitle mb-2 text-muted'>" .$data['Quantity']."</h6>" ."</br>" 


            . '<a href="updateform.php?id=' . $data['id'] .'"  class="btn btn-primary">Edit</a>'. 
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