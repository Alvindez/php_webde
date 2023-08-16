<!DOCTYPE html>
<html>
   <head>
      <title>Profile Page</title>
      <?php
      include 'includes/head.html';
      ?>
   </head>
   <body style="bgcolor:gray;">
      <!-- Nav -->
      <div class="row" style="border: 2px solid blue;">
         <?php
         include 'includes/nav.html';
         ?>
         
      </div>
      <div class="container-fluid">
         <div class="container-fluid">
            <!-- Table -->
            <h1>My Profile</h1>
            <table>
               <tr>
                     <th>Schools</th>
                     <th>Years</th>
                     <th>Awards</th>
               </tr>
               <tr>
                     <td>School 1</td>
                     <td>2021</td>
                     <td>Award 1</td>
               </tr>
               <tr>
                     <td>School 2</td>
                     <td>2025</td>
                     <td>Award 2</td>
               </tr>
               <tr>
                     <td>School 3</td>
                     <td>2027</td>
                     <td>Award 3</td>
               </tr>
            </table>



            

            <div class="row">
               <div class="col-lg-2" style="border: 2px solid red;">
                  <div class="section">I am a 25yr old gentleman who is ambitious and dedicated to whatever I put my hands on.
                     I love participating in sport coz it keeps me healthy and fit.

                  </div>
               </div>
               <div class="col-lg-4" style="border:2px solid green;">
                  <img src="images/images5.jpg" alt="My image">
               </div>
               <div class="col-lg-5"style="border: 2px solid blue;">
                  <img src="images/images5.jpg" alt="My image">
               </div>
            </div>
         </div>


         <!-- Footer -->
         <?php
         include 'includes/footer.html';
         ?>
      </div>
      <script src="bootstrap/js/bootstrap.min.js"></script>
   </body>
</html>
