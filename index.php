<?php 
  include "banco.php";
  $busca = "SELECT * from parceiros where primeiraPagina = 'sim' and status = 'ativo' limit 8";
  $iten = mysqli_query($con, $busca);
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta name="description" content="infoco publicidades, infoco publicidade, infocomn, publicidades, infoco, InFoco, marketing, erick ferreira, mn, empresarial, plataforma comercial, comercios">
  <meta name="author" content="Erick Ferreira">
  <meta name="google-site-verification" content="VEPmj7vef9AH59emCHJnJ2tNlZYxiEbAjlAjU1UKuRI" />
  <title>InFoco Publicidades</title>
  <link rel="shortcut icon" href="icon.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/>  
  <link rel="stylesheet" type="text/css" href="css/min.css">
  <link href="css/core.css" rel="stylesheet" type="text/css">
</head>
<body>

  <!-- CARREGAMENTO -->
  <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
      <!-- SCROLL TOP BUTTON -->
      <a class="scrollToTop" href="#"><i class="fas fa-chevron-up"></i></a>
      <!-- header section -->  
      <header id="header"><?php include "header.php" ?></header>

      <main>
        <?php include "sobre-infoco.php"; include "parceiros.php"; include "logos.php"; include "newsletter.php" ?>
      </main>

     <!-- Start Footer -->    
      <footer id="footer"><?php include "footer.php" ?></footer>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>  
      <script type="text/javascript" src="js/waypoints.min.js"></script>
      <script type="text/javascript" src="js/wow.js"></script> 
      <script type="text/javascript" src="js/custom.js"></script>

    </body>
    </html>