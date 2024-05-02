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
   <title>Rreth nesh</title>

  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Rreth nesh</h3>
   <p> <a href="home.php">Ballina</a> / Rreth nesh </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Pse na zgjodhet pikerisht ne?</h3>
         <p>Bookstore jone ofron te gjitha llojet e librave per te gjitha moshat me nje qmim tejet te volitshem dhe shume te pershtatshem.</p>
         <p>Bookstore daton qe nga viti 2022 dhe per qdo paqartesi,apo problem ju lutem te na kontaktoni.</p>
         <a href="contact.php" class="btn">Na kontaktoni</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Vlersimet e klienteve</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/ddd.jpeg" alt="">
         <p>Librat qe Bookstore ofron jane per lavdate.Porosia arrin shume shpejte dhe jane gjithperfshires per te gjitha moshat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Yll Hajdari</h3>
      </div>

      <div class="box">
         <img src="images/kiara.jpg" alt="">
         <p>Tejet i kenaqur me mundesite e ofruara per librat e mi te prefuar nga Bookstore.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kiara Tito</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Kualiteti shume i larte dhe porosia arrin shume shpejte.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ernesto Bilzerian</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Vlersimi im per Bookstore eshte 10/10.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Agnesa Hajdari</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.jpeg" alt="">
         <p>Jam shume e kenaqur me koleksionin qe Bookstore ofron,me te vertet ja vlen.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Luiz Ejlli</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Dyqani me i mire ne Kosove me nje koleksion teper te zhvilluar dhe mundesi te larta.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lisa</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Autoret e famshem</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/first.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ismail Kadare</h3>
      </div>

      <div class="box">
         <img src="images/secon.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Naim Frasheri</h3>
      </div>

      <div class="box">
         <img src="images/third.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Migjeni</h3>
      </div>

      <div class="box">
         <img src="images/kater.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sheila Jasanoff</h3>
      </div>

      <div class="box">
         <img src="images/pese.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Vehbi Kikaj</h3>
      </div>

      <div class="box">
         <img src="images/gjashte.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ernest Heminguej</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>


<script src="js/script.js"></script>

</body>
</html>