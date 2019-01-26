<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta name="description" content="InFoco Publicidade, infocomn, publicidade, infoco, InFoco, marketing, erick ferreira, mn, empresarial, plataforma comercial, comercios, contato, contato infoco">
  <meta name="author" content="Erick Ferreira">
  <meta name="google-site-verification" content="VEPmj7vef9AH59emCHJnJ2tNlZYxiEbAjlAjU1UKuRI" />
  <title>InFoco Publicidade</title>
  <link rel="shortcut icon" href="icon.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">

  <link href="css/preloader.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/core.css" rel="stylesheet">
</head>
<body class="body-contact">

  <!-- CARREGAMENTO -->
  <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
  <!-- header section -->  
  <header id="header"><?php include "header-for-all.php" ?></header>
  <main>
    <section class="contato-form">
     <div class="container" id="contato-container">
      <div class="faq-title">
        <h2 title="Perguntas Frequentes" id="quem-somos">Contato</h2>
        <span class="tittle-line"></span>
        <p>Duvidas, Sugestões, Reclamações? Fale Conosco.</p>
      </div>
      <form action="mensagem.php" class="contact-form" method="post">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" name="nome" placeholder="Nome" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email" >
            </div>
            <div class="form-group">
             <input type="text" class="form-control" name="telefone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="11" placeholder="Telefone" >
           </div>
           <div class="form-group">
            <div class="select">
              <select name="motivo" class="form-control">
                <option selected disabled value="">Setor de Contato</option>
                <option value="administrativo">Administrativo</option>
                <option value="comercial" title="vendas, infommações, contratos">Comercial</option>
                <option value="marketing">Marketing</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6">
         <div class="form-group">
          <textarea class="form-control textarea-contact" rows="5" name="mensagem" placeholder="Digite sua mensagem aqui..." ></textarea>
        </div>
      </div>
      <div class="col-md-6">
       <div class="g-recaptcha" data-sitekey="6Le3L4wUAAAAAEnxtpEOtDU4hJtxAuP_zWWV8Jjo"></div>
       <?php 
       if(!empty($_SESSION['captcha_vazio'])){
        echo "<small style='color: #f00; '>".$_SESSION['captcha_vazio']."</small>";
        unset($_SESSION['captcha_vazio']);
      }
      ?>
    </div>
    <div class="form-group" id="enviar-btn">
     <button class="btn btn-block" type="submit">ENVIAR<span class="glyphicon glyphicon-send"></span></button>
   </div>
 </div>
</form>

<div class="second-section">
  <!-- Boxes de Acoes -->
  <div class="col-md-4">
    <div class="box">             
      <div class="icon">
        <div class="image"><i class="fa fa-envelope"></i></div>
        <div class="info">
          <h3 class="title">EMAIL</h3>
          <p>
            contato@incofomn.com.br
          </p>
        </div>
      </div>
    </div> 
  </div>
  <div class="col-md-4">
    <div class="box">             
      <div class="icon">
        <div class="image"><i class="fas fa-phone"></i></div>
        <div class="info">
          <h3 class="title">TELEFONE</h3>
          <p><span><i class="fab fa-whatsapp"></i></span>(21) 98277-2106</p>
        </div>
      </div>
    </div> 
  </div>

  <div class="col-md-4">
    <div class="box">             
      <div class="icon">
        <div class="image"><i class="fas fa-headset"></i></div>
        <div class="info">
          <h3 class="title">ATENDIMENTO</h3>
          <p>
            De 09:00 às 19:00 de segunda à sexta-feira (exceto feriados). 
          </p>
        </div>
      </div>
    </div> 
  </div>        
</div>
</div>
</section>

</main>


<!-- Start Footer -->    
<footer id="footer"><?php include "footer.php" ?></footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>  
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/wow.js"></script> 
<script type="text/javascript" src="js/custom.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

</body>
</html>