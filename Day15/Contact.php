<!DOCTYPE html>
<html>
  <head>
    <center>
    <title>Contact Page</title>
    <?php
    include 'includes/head.html';
    ?>
  </head>
  <body style="background-color: gray ; background-position: center;">
    <div class="container-fluid">

      <!-- Nav row -->
      <div class="row">
        <?php
        include 'includes/nav.html';
        ?>
      </div>

      <!-- Contact row -->
      <div class="row" style="border: 2px solid red;">
        <h1>Contact Me</h1>
        <div class="container mt-5">

          <div class="row">
            <div class="col-md-6">
              <form action="includes/process_contact_form.php" method="post">
                <div class="mb-3">
                  <lable>firstName</lable>
                  <input type="text" class="form control" id="name" placeholder="Enter First Name" name="firstName">
                </div>

                <div class="mb-3">
                  <lable>secondName</lable>
                  <input type="text" class="form control" id="name" placeholder="Enter Second Name" name="secondName">
                </div>

                <div class="mb-3">
                  <lable>course</lable>
                  <input type="text" class="form control" id="name" placeholder="Enter Course Name" name="course">
                </div>
                <div class="mb-3">
                  <lable>email</lable>
                  <input type="text" class="form control" id="name" placeholder="Enter Email" name="email">
                </div>
                <div class="mb-3">
                  <lable>telephone</lable>
                  <input type="text" class="form control" id="name" placeholder="Enter Telephone no" name="telephone">
                </div>

                
                <button type="submit" class="btn btn-info">Submit</button>
              </form>
            </div>
            
          
          </div>
          
        </div>
      </div>
      </center>
      <div class="row" style="border: 2px solid red;">
          <link rel="stylesheet" href="stlyles.css"> 
      </div>

      <!-- footer row -->
      <?php
      include 'includes/footer.html';
      ?>

    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
