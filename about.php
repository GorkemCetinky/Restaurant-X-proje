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
   <link rel="icon" href="images/LYgjKqzpQb.ico" type="image/x-icon">

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

<?php include 'components/user_header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about baslangic  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about.jpg" alt="">
      </div>

      <div class="content">
         <h3>Odun Ateşinde Pişen Gerçek İtalyan Pizzası</h3>
         <p>Restaurant X'te, İtalyan pizzasının o eşsiz lezzetini ve geleneğini her bir dilimde yaşatıyoruz. Napoli'den geleneksel tariflerle hazırladığımız hamurumuzu, en az 48 saat mayalandırarak hafif ve sindirimi kolay bir yapıya ulaştırıyoruz. Kullanılan her malzeme özenle seçiliyor: San Marzano domateslerinden yapılan sosumuz, Campania'dan gelen taptaze manda sütü mozzarellamız ve yerel üreticilerden temin ettiğimiz mevsimlik malzemeler...</p>
         <a href="menu.php" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about son -->


<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/blog-1.jpg" alt="">
         <h3>Pizza</h3>
         <p>Restaurant X'te, İtalyan pizzasının o eşsiz lezzetini ve geleneğini her bir dilimde yaşatıyoruz. Napoli'den geleneksel tariflerle hazırladığımız hamurumuzu, en az 48 saat mayalandırarak hafif ve sindirimi kolay bir yapıya ulaştırıyoruz.</p>
      </div>

      <div class="box">
         <img src="images/blog-2.jpg" alt="">
         <h3>Arabiata Soslu Makarna</h3>
         <p>İtalyan mutfağında spagettilerin yeri bir başkadır. İtalya'nın Lazio şehriyle özdeşleşen arabiata soslu makarna ise chili biberi, domates ve parmesan peyniri ile hazırlanır.</p>
      </div>

      <div class="box">
         <img src="images/blog-3.jpg" alt="">
         <h3>Lazanya</h3>
         <p>İsmini pişirildiği kaptan alan lazanya, özel lazanya hamuru, domates sos ve peynir ile hazırlanır. Genellikle kıymalı ve sade bir şekilde sunulur. Lazanya, ismini İtalya'nın güzelliğiyle ünlü Bolonya şehrinden alır.</p>
      </div>

   </div>

</section>
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