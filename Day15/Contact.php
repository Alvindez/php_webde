<!DOCTYPE html>
<html>
  <head>
    <title>Contact Page</title>
    <?php
    include 'includes/head.html';
    ?>
  </head>
  <body>
    <div class="container-fluid">

      <!-- Nav row -->
      <div class="row" style="border: 2px solid blue;">
        <?php
        include 'includes/nav.html';
        ?>
      </div>

      <!-- Contact row -->
      <div class="row" style="border: 2px solid red;">
        <h1>Contact Me</h1>
        <div class="container mt-5">
          <div class="row justify">
            <div class="col-md-6">
              <form action="process_contact_form.php" method="post">
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
            <div class="col-lg-2" style="background-color: aquamarine;">
              <div class="section">mhsdhfjhvbbvkjhfsibyd syfa fiefya fewefvsgda buqywjsihdnjubf sufwjefu wasswa alvin dez come lets eat food tomorrow,th folowing day and the day after tomorrow</div>
            </div>
            <div class="col-lg-4">
              <div class="section"><img src="images/images5.jpg" alt="My image"></div>
            </div>
          
          </div>
          
        </div>
      </div>

      <!-- footer row -->
      <?php
      include 'includes/footer.html';
      ?>

    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
