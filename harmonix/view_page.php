<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['add_to_wishlist'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);

   $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
   $check_wishlist_numbers->execute([$p_name, $user_id]);

   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
   $check_cart_numbers->execute([$p_name, $user_id]);

   if($check_wishlist_numbers->rowCount() > 0){
      $message[] = 'already added to wishlist!';
   }elseif($check_cart_numbers->rowCount() > 0){
      $message[] = 'already added to cart!';
   }else{
      $insert_wishlist = $conn->prepare("INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES(?,?,?,?,?)");
      $insert_wishlist->execute([$user_id, $pid, $p_name, $p_price, $p_image]);
      $message[] = 'added to wishlist!';
   }

}

if(isset($_POST['add_to_cart'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);
   $p_qty = $_POST['p_qty'];
   $p_qty = filter_var($p_qty, FILTER_SANITIZE_STRING);

   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
   $check_cart_numbers->execute([$p_name, $user_id]);

   if($check_cart_numbers->rowCount() > 0){
      $message[] = 'already added to cart!';
   }else{

      $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
      $check_wishlist_numbers->execute([$p_name, $user_id]);

      if($check_wishlist_numbers->rowCount() > 0){
         $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE name = ? AND user_id = ?");
         $delete_wishlist->execute([$p_name, $user_id]);
      }

      $insert_cart = $conn->prepare("INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES(?,?,?,?,?,?)");
      $insert_cart->execute([$user_id, $pid, $p_name, $p_price, $p_qty, $p_image]);
      $message[] = 'added to cart!';
   }

}

if (isset($_POST['submit_review'])) {

   // Get the review data from the form
   $product_id = $_POST['product_id'];
   $rating = $_POST['rating'];
   $review_text = $_POST['review_text'];
   $review_date = date('Y-m-d');

   // Validate and sanitize the review data (add more validation if required)
   $product_id = filter_var($product_id, FILTER_SANITIZE_STRING);
   $rating = filter_var($rating, FILTER_VALIDATE_INT);
   $review_text = filter_var($review_text, FILTER_SANITIZE_STRING);

   // Check if the review is valid (add more validation if required)
   if (!$product_id || !$rating || !$review_text) {
       $message[] = 'Please fill in all the review fields.';
   } else {
       // Insert the review into the database
       $insert_review = $conn->prepare("INSERT INTO `reviews` (product_id, rating, review, review_date, user_id) VALUES (?, ?, ?, ?, ?)");
       $insert_review->execute([$product_id, $rating, $review_text, $review_date, $user_id]);
       $message[] = 'Your review has been submitted successfully.';
   }
}

?>


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>quick view</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="quick-view">

   <h1 class="title">quick view</h1>

   <?php
      $pid = $_GET['pid'];
      $select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
      $select_products->execute([$pid]);
      if($select_products->rowCount() > 0){
         while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){ 
   ?>


   <form action="" class="box" method="POST">
      <div class="price">$<span><?= $fetch_products['price']; ?></span>/-</div>
      <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
      <div class="name"><?= $fetch_products['name']; ?></div>
      <div class="details"><?= $fetch_products['details']; ?></div>
      <div class="user"><?= $fetch_products['user']; ?></div>
      <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
      <input type="hidden" name="p_name" value="<?= $fetch_products['name']; ?>">
      <input type="hidden" name="p_price" value="<?= $fetch_products['price']; ?>">
      <input type="hidden" name="p_image" value="<?= $fetch_products['image']; ?>">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
            <div class="box"> 
               <?php
      $userid = $fetch_products['user'];
      $select_user = $conn->prepare("SELECT name, email FROM `users` WHERE id = ?");
      $select_user->execute([$userid]);
      $user_details = $select_user->fetch(PDO::FETCH_ASSOC);

      if ($user_details) {
         echo '<h2>Uploaded by:</h2>';
         echo '<div class="name">Name: ' . $user_details['name'];
         echo '</div>';
         echo '<div class="name">Email: ' . $user_details['email'];
         echo '</div>';
      } else {
         echo 'User not found.';
      }
      ?></div>
   <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
   ?>

</section>
<div class = "csr">
<section class="quick-view"style="width: 50rem">
   <?php
      $select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
      $select_products->execute([$pid]);
      if($select_products->rowCount() > 0){
         $fetch_products = $select_products->fetch(PDO::FETCH_ASSOC);
   ?>
   <form action="" class="box" method="POST">
      <div class="form-group" style="font-size: 2rem">
         <label for="rating">Rating:</label>
         <select name="rating" id="rating" required>
            <option value="5">5 Stars</option>
            <option value="4">4 Stars</option>
            <option value="3">3 Stars</option>
            <option value="2">2 Stars</option>
            <option value="1">1 Star</option>
         </select>
      </div>
      <div class="form-group"style="font-size: 2rem">
         <label for="review_text">Your Review:</label>
         <textarea name="review_text" id="review_text" rows="4" required></textarea>
      </div>
      <input type="hidden" name="product_id" value="<?= $fetch_products['id']; ?>">
      <input type="submit" value="Submit Review" class="btn" name="submit_review">
   </form>
   <?php
      } else {
         echo '<p class="empty">No products added yet!</p>';
      }
   ?>
</section>

<section class="review-part" style=" max-width: 50rem;
   padding:2rem;
   font-size: 2rem;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
   position: relative;
   margin:0 auto;">
   <h2 style="text-align: center">Product Reviews</h2>
   <?php
      // Fetch reviews for the current product from the database
      $select_reviews = $conn->prepare("SELECT r.*, u.name AS user_name, u.email FROM `reviews` r
                                        INNER JOIN `users` u ON r.user_id = u.id
                                        WHERE r.product_id = ?");
      $select_reviews->execute([$pid]);

      // Check if there are any reviews for the product
      if ($select_reviews->rowCount() > 0) {
         while ($review = $select_reviews->fetch(PDO::FETCH_ASSOC)) {
            // Display review details here (e.g., rating, review text, review date, etc.)
            echo '<div class="review-part">';
            echo '<h3>Rating: ' . $review['rating'] . ' Stars</h3>';
            echo '<p>User: ' . $review['user_name'] . '</p>';
            echo '<p>Email: ' . $review['email'] . '</p>';
            echo '<p>Review: ' . $review['review'] . '</p>';
            echo '<p>Date: ' . $review['review_date'] . '</p>';
            echo '</div>';
         }
      } else {
         echo '<p class="empty">No reviews for this product yet!</p>';
      }
   ?>
</section>

   </div>




<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>