<?php
include "V_verifica-login.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../CSS_Hiago/cssHiago2.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha3844-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Hospital Goiás</title>
    <link rel="shortcut icon" href="../imagens/logo_tittle.png">
    
    <link rel="stylesheet" type="text/css" href="../view/cssHiago2.css">
</head>

<body>

<header><!-- inicio Cabecalho -->
      <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #a3bbd9;">
        <div class="container">
           
          <a href="#" class="navbar-brand">
            <img src="../imagens/hospital_logo__2_-removebg-preview (1).png" height="85px">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="V_logout.php" class="btn btn-outline-light ml-4">Sair</a>
              </li>
            </ul>
          </div>
       
        </div>
      </nav>
    </header><!--/fim Cabecalho -->
    
<section class="meio">
  <div class="container">

     <br>

        <div class="row">
          <div class="col-md-4">
                <div class="card">
                    <div class="card-header dark-blue text-center text-black">
                      UTI
                    </div>
                    <div class="card-body text-center">
                      <br>
                      <a href="P_internações-uti_leitosadm.php"><img src="../imagens/icone-uti.png" width="100px"></a>
                      <br>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header dark-blue text-center text-black">
                      Cadastro de Médicos
                    </div>
                    <div class="card-body text-center">
                      <br>
                      <a href="P_cadastro_Medico.php"><img src="../imagens/icone-cadastro_medico.png" width="100px"></a>
                      <br>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header dark-blue text-center text-black">
                     Médicos
                    </div>
                    <div class="card-body text-center">
                      <br>
                      <a href="P_listagem-medico.php"><img src="../imagens/icone-perfil.png" width="100px"></a>
                      <br>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
              <br><br>
                <div class="card">
                    <div class="card-header dark-blue text-center text-black">
                      Meu perfil
                    </div>
                    <div class="card-body text-center">
                      <br>
                      <a href="P_perfil-usuarioadm.php"><img src="../imagens/icone-perfil.png" width="100px"></a>
                      <br>
                    </div>
                </div>
            </div>
        </div>

    </section> 

<script>
    
        $(document).ready(function(){

          $('.sub-btn').click(function(){
            $(this).next('.sub-menu').slideToggle();
            $(this).find('.dropdown').toggleClass('rotate');
          });

          $('.menu-btn').click(function(){
            $('.side-bar').addClass('active');
            $('.menu-btn').css("visibility", "hidden");
          });

          $('.close-btn').click(function(){
            $('.side-bar').removeClass('active');
            $('.menu-btn').css("visibility", "visible");
          });

          $('#header-user').click(function(event) {
    $('#header-user').toggleClass('visible');
    event.stopPropagation();
    if ($('#header-notif').hasClass('visible')) {
      $('#header-notif').removeClass('visible');
    }
  });
  $(document).click(function(){
    $("#header-user").removeClass('visible');
    $('#header-notif').removeClass('visible');
  });

        });

</script>
  
</body>
</html>
