<!DOCTYPE html>
<html>
   <head>
      <title>Profile Page</title>
  
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
            <section class="products">
               <h2>OUR PRODUCTS</h2>
               <div class="all-products">
                  <div class="product">
                     <img src="images/im3.jpg">
                     <div class="product-info">
                        <h4 class="product-title">iPhone13</h4>
                        <p class="product-price">$350</p>
                        <a class="product-btn" href="#">Buy now</a>
                     </div>
                  </div>
                  <div class="product">
                     <img src="images/im6.jpg">
                     <div class="product-info">
                        <h4 class="product-title">Google pixel phone</h4>
                        <p class="product-price">$250</p>
                        <a class="product-btn" href="#">Buy now</a>
                     </div>
                  </div>
                  <div class="product">
                     <img src="images/im7.jpg">
                     <div class="product-info">
                        <h4 class="product-title">Redmi</h4>
                        <p class="product-price">$200</p>
                        <a class="product-btn" href="#">Buy now</a>
                     </div>
                  </div>
                  <div class="product">
                     <img src="images/im8.jpg">
                     <div class="product-info">
                        <h4 class="product-title">iPhone7</h4>
                        <p class="product-price">$400</p>
                        <a class="product-btn" href="#">Buy now</a>
                     </div>
                  </div>
                  <div class="product">
                     <img src="images/im4.jpg">
                     <div class="product-info">
                        <h4 class="product-title">Samsung</h4>
                        <p class="product-price">$300</p>
                        <a class="product-btn" href="#">Buy now</a>
                     </div>
                  </div>
                  <div class="product">
                     <img src="images/im2.jpg">
                     <div class="product-info">
                        <h4 class="product-title">Port hub</h4>
                        <p class="product-price">$50</p>
                        <a class="product-btn" href="#">Buy now</a>
                     </div>
                  </div>
               </div>
            </section>
         
            
   
         </div>
         
         
         


         <div class="col-lg-6" style="border: 2px solid red;">
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
