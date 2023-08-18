<!DOCTYPE html>
<html>
  <head>
    <title>IMS </title>
    <link rel="stylesheet"href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"href="styles.css">
  </head>
  <body>
    <div class="container-fluid">
      
    <!-- Contact row -->
    <div class="row" style="border: 2px solid red;">
      <h1>Contact Me</h1>
      <div class="container mt-5">
        <div class="row justify">
          <div class="col-md-6">
          <form action="process_sales_form.php" method="post">  
      
          <div class="mb-3">
              <lable>Name</lable>
              <input type="text" class="form control" name="ItemName"  placeholder="Enter Name" value= "ItemName">
          </div>

          <div class="mb-3">
              <lable>Description</lable>
              <input type="text" class="form control" name="ItemDescription" placeholder="Describe Item" value= "ItemDescription">
          </div>

          <div class="mb-3">
              <lable>Price</lable>
              <input type="text" class="form control" name="Price" placeholder="Enter Price" value= "Price">
          </div>
          <div class="mb-3">
              <lable>Quantity</lable>
              <input type="text" class="form control" name="Quantity" placeholder="Enter Quantity" value= "Quantity">
          </div>

              
              <button type="submit" class="btn btn-info">Submit</button>
            </form>

            <div class="section"><img src="images/images5.jpg" alt="My image"></div>
          </div>
        
        </div>
        
      </div>
    </div>
    <link rel="stylesheet"href="styles.css">

    <!-- footer row -->
    <?php
    include 'includes/footer.html';
    ?>

  </div>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
