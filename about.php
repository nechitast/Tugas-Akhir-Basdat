<?php

include 'config.php';

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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/tokobuku.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Website kami menyediakan layanan bagi anda yang mencari buku dengan harga yang terjangkau. Buku yang telah dipilih akan dikirim dengan aman langsung ke tangan anda. Jadi tunggu apa lagi?, cari dan miliki buku yang anda inginkan sekrang!</p>
         <p>Ke Semarang bawa merica, singgah sebentar si Surabaya. Siapa orang gemar membaca, jalan hidupnya penuh cahaya.</p>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/elon.jpg" alt="">
         <p>I find this website really helpful for me to find second hand book that match my budget .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Elon Musk</h3>
      </div>

      <div class="box">
         <img src="images/bill.jpg" alt="">
         <p>Such a cool website, i think i will invest my money for Bookers.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bill Gates</h3>
      </div>

      <div class="box">
         <img src="images/alif.jpg" alt="">
         <p>Kamu nanyaa??<br/>Kamu bertanya-tanya beli buku bekas dimana?.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alif Cepmek</h3>
      </div>

      <div class="box">
         <img src="images/hanso.jpeg" alt="">
         <p>웹사이트 정말 멋져요 특히 만든 분들 사랑해요 토니.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Han So Hee</h3>
      </div>

      <div class="box">
         <img src="images/dodo.jpeg" alt="">
         <p>SIUUUUU.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Cristiano Ronaldo</h3>
      </div>

      <div class="box">
         <img src="images/drake.jpg" alt="">
         <p>Yessirrr.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Drake</h3>
      </div>



   </div>

</section>

<section class="authors">

   <h1 class="title">Bookers Founder</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/toni1.jpg" alt="">
         
         <h3>Antonio</h3>
      </div>

      <div class="box">
         <img src="images/adit1.jpg" alt="">
         
         <h3>Aditya Mahendra</h3>
      </div>

      <div class="box">
         <img src="images/tata1.jpg" alt="">
         
         <h3>Nechita Samantha</h3>
      </div>

      <div class="box">
         <img src="images/jihan1.jpg" alt="">
        
         <h3>Jihan Febriharvianti</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>