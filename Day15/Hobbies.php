<!DOCTYPE html>
<html>
   <head>
      <title>Home Page</title>
  
     <?php
     include 'includes/head.html';
     ?>
   </head>
   <body style="background-color: gray ; background-position: center;">
      <!-- Nav -->
      <div class="container-fluid">
         <div class="row" style="border: 2px solid blue;">
            <?php
            include 'includes/nav.html';
            ?>
         </div>
         <?php
         include 'includes/sliders.php'
         ?>
         <div class="row" style="border: 2px solid red;">
            <link rel="stylesheet" href="stlyles.css"> 
         </div>

         <!-- Footer -->
            <?php
            include 'includes/footer.html';
            ?>
      </div>
      <script src="bootstrap/js/bootstrap.min.js"></script>
   </body>
</html>
