<!DOCTYPE html>
<html>
  <head>
    <title>Contact Page</title>
    <link rel="stylesheet"href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container-fluid">

      <!-- Nav row -->
      <div class="row" style="border: 2px solid blue;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
              </ul>
            </div>
          </div>
        </nav>
      </div>

      <!-- Contact row -->
      <div class="row" style="border: 2px solid red;">
        <h1>Contact Me</h1>
        <div class="container mt-5">
          <div class="row justify">
            <div class="col-md-6">
              <form action="connect.php" method="post">
                <div class="mb-3">
                  <lable>firstName</lable>
                  <input type="text" class="firstName" id="name" placeholder="Enter First Name" name="firstName">
                </div>

                <div class="mb-3">
                  <lable>secondName</lable>
                  <input type="text" class="secondName" id="name" placeholder="Enter Second Name" name="secondName">
                </div>

                <div class="mb-3">
                  <lable>course</lable>
                  <input type="text" class=" course" id="name" placeholder="Enter Course Name" name="course">
                </div>
                <div class="mb-3">
                  <lable>email</lable>
                  <input type="text" class="email" id="name" placeholder="Enter Your Email" name="email">
                </div>
                <div class="mb-3">
                  <lable>telephone</lable>
                  <input type="text" class="telephone" id="name" placeholder="Your Telephone Number" name="telephone">
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
      <div class="row" style="border: 2px solid green;">
        <footer class="bg-dark text-light py-3">
          <div class="container text-center">
            <p>&copy2023.All rights Reserved</p>
          </div>
        </footer>
      </div>

    </div>
  </body>
</html>
