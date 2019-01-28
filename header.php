<div class="header-inner">
  <div class="swiper-container" id="slide-comercial">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src='img/banners/med.jpg' width='100%' alt='BANNER COMERCIAL'>
        <a href="http://medisim.com.br/" target="_blank" class="btn link-carousel">VISITAR</a>
      </div>
      <?php 
      $i = 0;
      while ( $i < 4) { 
        $i++;  
        echo "<div class='swiper-slide'>
        <img src='img/banners/$i.jpg' width='100%' alt='BANNER COMERCIAL'>
        </div>";
      } 
      ?>
      <div class="swiper-slide">
        <img src='img/banners/infoco.jpg' width='100%' alt='BANNER COMERCIAL'>
        <a href="adesao.php" class="btn link-infoco">FAÇA SUA ADESÃO</a>
      </div>
    </div>
    <div class="scrolldown">
      <a class="scroll-icon smoothscroll">    
        Role para Baixo       
        <i class="fas fa-arrow-right"></i>
      </a>
    </div> 
    <div class="next-back">
      <div class="voltar"></div>
      <div class="proximo"></div>
    </div>
    <div class="swiper-pagination"></div>     
  </div>
</div>

  <!-- menu section -->
  <section id="menu-area">
    <nav id="nav">
      <button id="fechar"><i class="far fa-window-close"></i></button>
      <ul>
        <span>
          <fieldset class="menu-mobile">MENU</fieldset>
          <li><a href="index.php" class="first"  title="Inicio">HOME</a></li>
          <li><a href="contato.php" title="Contato">CONTATO</a></li>
          <li><a href="planos.php" title="Planos">PLANOS</a></li>
          <li><a href="sobre.php" title="Quem nós somos">QUEM SOMOS</a></li>
          <li><a href="partners-page.php" title="Novidades">PARCEIROS</a></li>
          <li><a href="faq.php" title="Perguntas Frequentes">FAQ</a></li>
        </span>
        <fieldset class="categ">CATEGORIAS</fieldset>
        <li><a href="categoria.php?infocateg=comercio" class="first"><i class="fas fa-store"></i>Comércio</a></li>
        <li><a href="categoria.php?infocateg=moda"><i class="fas fa-tshirt"></i>Moda</a></li>
        <li><a href="categoria.php?infocateg=saude"><i class="fas fa-briefcase-medical"></i>Saúde</a></li>
        <li><a href="categoria.php?infocateg=beleza"><i class="fas fa-grin"></i>Beleza</a></li>
        <li><a href="categoria.php?infocateg=educacao"><i class="fas fa-graduation-cap"></i>Educação</a></li>
        <li><a href="categoria.php?infocateg=servicos"><i class="fas fa-cogs"></i>Serviços</a></li>
        <li><a href="categoria.php?infocateg=lazer"><i class="fas fa-umbrella-beach"></i>Lazer</a></li>
        <li><a href="categoria.php?infocateg=alimentacao"><i class="fas fa-utensils"></i>Alimentação</a></li>
      </ul>
    </nav>
    <nav class="navbar navbar-default main-navbar">  
      <div class="container">
        <div class="navbar-header">
          <div class="sidebar-logo">
            <div class="menu"><i class="fas fa-bars" title="Menu"></i></div>
            <a class="navbar-brand logo" href="index.php"><img src="intro.png" alt="InFoco"></a>
          </div>                     
        </div>
        <div id="navbar">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
            <li class="active"><a href="index.php" title="Inicio">Home</a></li>
            <li><a href="contato.php" title="Contato">CONTATO</a></li>                  
            <li><a href="planos.php"  title="Planos">PLANOS</a></li> 
            <li><a href="sobre.php" title="Quem nós somos">QUEM SOMOS</a></li>
            <li><a href="partners-page.php" title="Novidades">PARCEIROS</a></li>             
            <li><a href="faq.php" title="Perguntas Frequentes">FAQ</a></li>              
          </ul>                            
        </div>
        <div class="search-area">
          <form method="get" action="pesquisa.php">
            <input id="search" name="pesq" type="text" placeholder="Digite o que procura...">
            <input id="search_submit" type="submit">
          </form>
        </div> 

      </div>          
    </nav> 
  </section>