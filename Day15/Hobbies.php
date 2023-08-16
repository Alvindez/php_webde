<!DOCTYPE html>
<html>
   <head>
      <title>Hobbies Page</title>
      <?php
      include 'includes/head.html';
      ?>
   </head>
   <body bgcolor="gray">
     <!-- Nav -->
        <?php
        include 'includes/nav.html';
        ?>
      <!-- Table -->
      <div class="container">
        <h1>My Hobbies</h1>
        <table>
            <tr>
                <th>Indoor Hobbies</th>
                <th>Outdoor Hobbies</th>
            </tr>
            <tr>
                <td>Chess</td>
                <td>Football</td>
            </tr>
            <tr>
                <td>Ludo</td>
                <td>Jogging</td>
            </tr>
            <tr>
                <td>Cooking</td>
                <td>Hiking</td>
            </tr>
            <tr>
                <td>Video games</td>
                <td>swiming</td>
            </tr>
        </table>
        <link rel="stylesheet" href="stlyles.css">
      </div>
      <!-- Footer -->
      <?php
      include 'includes/footer.html';
      ?>
      <script src="bootstrap/js/bootstrap.min.js"></script>
   </body>
</html>
