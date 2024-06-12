<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="cess/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">HOME</a> <span> / ABOUT</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/pic.png" alt="">
      </div>

      <div class="content">
         <h3>Mengenai Kami</h3>
         <p>Ciin Hui Ayam Cabe Hijau adalah masakan dari Selatpanjang dan sekarang berlokasi di Batam. Cin Hui menyediakan berbagai ragam menu Sepert Nasi, Mie, Ayam, Tempe dan Tahu, dan lainnya </p>
         <a href="menu.php" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">MORE INFO</h1>

   <div class="box-container">

      <div class="box">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15956.171674974163!2d104.0118817!3d1.1296176!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98dbc5e99015d%3A0x7e3906443a0bba69!2sCin%20Hui%20Ayam%20Cabe%20Hijau%20Selat%20Panjang!5e0!3m2!1sen!2sid!4v1717753663302!5m2!1sen!2sid" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         <h3>Location</h3>
         <p>Permata Baloi Blok H1 15, Baloi Indah, Lubuk Baja </p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Delivery</h3>
         <p>Pengiriman makanan hanya tersedia di kawasan perumahan Permata Baloi.</p>
      </div>

      

   </div>

</section>

<!-- steps section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>