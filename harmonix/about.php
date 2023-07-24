<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<!-- <section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, a quod, quis alias eius dignissimos pariatur laborum dolorem ad ullam iure, consequatur autem animi illo odit! Atque quia minima voluptatibus.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, a quod, quis alias eius dignissimos pariatur laborum dolorem ad ullam iure, consequatur autem animi illo odit! Atque quia minima voluptatibus.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section> -->

<section class="reviews">

   <h1 class="title">Harmony at Harmonix</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/easy.png" alt="">
         <h3>Hassle-Free Shopping</h3>
         <p>User-friendly to navigate quickly</p>
         
      </div>


      <div class="box">
         <img src="images/delivery.png" alt="">
         <h3>Reliable Shipping</h3>
         <p>Timely, secure and fast delivery service</p>
       
         
      </div>

      <div class="box">
         <img src="images/check-box.png" alt="">
         <h3>Customer Reviews</h3>
         <p>Encourages customers to share their experiences to help others</p> 
         
      </div>

      <div class="box">
         <img src="images/support.png" alt="">
         <h3>Customer Support</h3>
         <p>Knowledgeable and friendly support</p>
        
      </div>

      <div class="box">
         <img src="images/note.png" alt="">
         <h3>Detailed Product Descriptions</h3>
         <p>Highlights key features, specifications and functionalities</p>
        
      </div>

      <div class="box">
         <img src="images/return-box.png" alt="">
         <h3>Return Policies</h3>
         <p>Don't like it? Return it! </p>
         
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>