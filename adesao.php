<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible"content="IE=edge">
  <meta name="viewport"content="width=device-width,initial-scale=1,shrink-to-fit=no,user-scalable=no">
  <meta name="description"content="InFocoPublicidade,infocomn,publicidade,infoco,InFoco,marketing,erickferreira,mn,empresarial,plataformacomercial,comercios,parceiros">
  <meta name="author"content="Erick Ferreira">
  <meta name="google-site-verification"content="VEPmj7vef9AH59emCHJnJ2tNlZYxiEbAjlAjU1UKuRI" />
  <title>InFoco Publicidade</title>
  <link rel="shortcut icon"href="icon.png">
  <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet"type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/> 
  <link href="css/min.css" rel="stylesheet">
  <link href="css/core.css" rel="stylesheet">
</head>
<body class="adesao-body">

  <!-- CARREGAMENTO -->
  <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fas fa-chevron-up"></i></a> 
  <header id="header"><?php include "header-for-all.php" ?></header>

  <main>
    <section id="faq">
      <div class="container" id="container-adesao">
        <div class="faq-title">
          <h2 title="Perguntas Frequentes" id="quem-somos">FICHA DE ADESÃO INFOCO</h2>
          <span class="tittle-line"></span>
        </div>
        <div class="col-md-12">
          <form class="form-horizontal" method="POST" role="form" action="">

            <div class="row">
              <div class="col-md-6">
                <div class="panel">
                  <div class="panel-heading custom-header-panel">
                    <h4 class="panel-title">Informações Pessoais</h4>
                  </div>
                  <div class="panel-body">

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nome/Razão Social <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="nome" oninvalid="this.setCustomValidity('Campo requerido')" oninput="setCustomValidity('')" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">CNPJ <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="cnpj" onkeypress="return event.charCode >= 48 && event.charCode <= 57" onblur="pesquisacep(this.value);"  required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nome Fantasia <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="Nome Fantasia"  required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Inscrição Municipal <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="Inscrição Municipal"  required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Inscrição Estadual <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="Inscrição Estadual"  required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Segmento Profissional <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="Segmento Profissional"  required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="panel">
                  <div class="panel-heading custom-header-panel">
                    <h4 class="panel-title">Endereço</h4>
                  </div>
                  <div class="panel-body">

                    <div class="form-group">
                      <label class="col-sm-4 control-label">CEP <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="cep" id="cep" maxlength="8" onkeypress="return event.charCode >= 48 && event.charCode <= 57" onblur="pesquisacep(this.value);" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Município <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="municipio" id="municipio" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">UF <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="estado" id="uf" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Endereço <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="endereco" name="endereco" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Bairro <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="bairro" name="bairro" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Número <span class="requerido"> *</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="numero" required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-md-6">
                <div class="panel">
                  <div class="panel-heading custom-header-panel">
                    <h4 class="panel-title">Plano Desejado</h4>
                  </div>
                  <div class="panel-body">

                   <div class="form-group">
                    <label for="country" class="col-sm-4 control-label">Plano<span class="requerido"> *</span></label>
                    <div class="col-sm-8">
                      <select name="plano" class="form-control" required="">
                        <option selected disabled>Selecione um Plano</option>
                        <option value="Básico">Básico</option>
                        <option value="Intermediário">Intermediário</option>
                        <option value="Avançado">Avançado</option>
                        <option value="Super">Super</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6" id="contato">
              <div class="panel">
                <div class="panel-heading custom-header-panel">
                  <h4 class="panel-title">Contato</h4>
                </div>
                <div class="panel-body">

                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="name">Telefone Fixo <span class="requerido"> *</span></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="telefone" required maxlength="11">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="name">Celular <span class="requerido"> *</span></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="celular" required maxlength="11">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="country" class="col-sm-4 control-label">Whastapp?<span class="requerido"> *</span></label>
                    <div class="col-sm-8">
                      <select name="whastapp" class="form-control" required="">
                        <option selected disabled>Selecione</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="name">Email <span class="requerido"> *</span></label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" name="email" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="name">Facebook <span class="requerido"> *</span></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="facebook" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="name">Instagram <span class="requerido"> *</span></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="instagram" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="name">Twitter <span class="requerido"> *</span></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="twitter" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="name">Twitter <span class="requerido"> *</span></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="twitter" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="name">Site <span class="requerido"> *</span></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="site" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 


          <div class="form-group text-center">
            <button type="submit" id="submit_btn" class="btn btn-orange-md">ENVIAR</button>
          </div>

        </div>
      </form> 

      <div class="faq-title">
        <h3>Alguma duvida?</h3>
        <span class="tittle-line"></span>
      </div>
      <div class="adesao-btn">
        <a href="contato.php">ENTRE EM CONTATO</a>
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

</body>
</html>