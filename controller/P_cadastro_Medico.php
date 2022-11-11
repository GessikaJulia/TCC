<?php
include "V_verifica-login.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha3844-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
                <a href="P_indexadm.php" class="nav-link text-light">Inicio</a>
              </li>
              <li class="nav-item">
                <a href="P_internações-uti_leitosadm.php" class="nav-link text-light">UTI/Leitos</a>
              </li>
              <li class="nav-item">
                <a href="P_cadastro_Medico.php" class="nav-link text-light">Cadastro Medico</a>
              </li>
              <li class="nav-item">
                <a href="P_listagem-medico.php" class="nav-link text-light">Medicos</a>
              </li>
              <li class="nav-item">
                <a href="P_perfil-usuario.php" class="nav-link text-light">Meu perfil</a>
              </li>
              <li class="nav-item">
                <a href="V_logout.php" class="btn btn-outline-light ml-4">Sair</a>
              </li>
          </div>
       
        </div>
      </nav>
    </header><!--/fim Cabecalho -->

    <section class="meio">
        <div class="AppVUE">
            <div class="container my-3" style="min-height: 100%;">
                <div id="requerimentos">

                    <div class="row">

                        <div class="col-lg-4 col-md-12">

                            <div class="card card-general shadow-sm">

                                <div class="card-title">
                                    <span>Instruções</span>
                                </div>

                                <div class="card-body">
                                    <p>1. Selecione o formulário</p>

                                    <select name="" id="select-form" class="custom-select my-3">

                                        <option data-target="#form-cadastro-medico">01 - Formulário de Cadastro de Medico
                                        </option>
                                        <!-- FORMULÁRIO QUE SO ADM CONSEGUE VER-->
                                        <option data-target="#form-atualizacao">02 - Atualizar
                                        </option>
                                        <!-- ATÉ AQUI-->

                                    </select>

                                    <p>2. Preencha o formulário</p>
                                    <p>3. Envie (:</p>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-8 col-md-12">



                            <div id="form-cadastro-medico" class="selected">

                                <div class="card mb-3 shadow-sm card-general">
                                    <div class="card-title">
                                        <span>Formulário de Cadastro de Medico</span>
                                    </div>

                                    <div class="card-body">
                                        <div>
                                            Utilize este formulário para postar o cadastro de Medicoss.
                                        </div>
                                        <hr>

                                        <form action="" method="post" class="form-general">
                                            <input type="hidden" name="_token" value=""> <input type="hidden" name="acao" value="4">
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label>CPF Gestão: </label>
                                                    <input type="text" v-model="cpfGestao" OnKeyPress="formatacao('###.###.###-##', this)" name="cpfGestao" class="form-control" maxlength="14" placeholder="Ex: 000.000.000-00" required="">
                                                </div>

                                                <div class="col-md-6 spacing">
                                                    <label>nome completo do medico</label>
                                                    <input type="text" v-model="NomeMedico" name="usuario_sofreu_acao" class="form-control" maxlength="50" placeholder="Ex: Cesar" required="">
                                                </div>
                                            </div>

                                            <div class="form-group row">

                                                <div class="col-md-6 spacing">
                                                    <label>Especialidade</label>
                                                    <select class="form-control" v-model="Especialidade" name="id_patente">
                                                        <option value="Cardiologista">Cardiologista</option>
                                                        <option value="Oftalmologista">Oftalmologista</option>
                                                        <option value="Psiquiatra">Psiquiatra</option>

                                                    </select>
                                                </div>

                                                <div class="col-md-6 spacing">
                                                    <label>CPF</label>
                                                    <input type="text" v-model="cpf" OnKeyPress="formatacao('###.###.###-##', this)" name="usuario_sofreu_acao" class="form-control" maxlength="14" placeholder="Ex: 000.000.000-00" required="">
                                                </div>

                                                <div class="form-group row">


                                                    <div class="col-md-6 spacing">
                                                        <label>CRM</label>
                                                        <input type="text" v-model="crm" OnKeyPress="formatacao('#####-##', this)" name="usuario_sofreu_acao" class="form-control" maxlength="8" placeholder="Ex: 00000-GO" required="">
                                                    </div>

                                                    <div class="col-md-6 spacing">
                                                        <label>Data de nascimento</label>
                                                        <input type="text" v-model="Nascimento" OnKeyPress="formatacao('##/##/####', this)" name="usuario_sofreu_acao" class="form-control" maxlength="10" placeholder="Ex: 01/01/2000" required="">
                                                    </div>

                                                </div>

                                                <div class="form-group row">


                                                    <div class="col-md-6 spacing">
                                                        <label>Normas</label>
                                                        <p><span class="badge bg-principal text-white">INFO</span> Ao preencher este
                                                            requerimento, atesto que li e estou em total acordo com as normas de
                                                            Cadastro.</p>
                                                    </div>
                                                </div>

                                                <button class="btn btn-send">Enviar</button>

                                        </form>
                                    </div>
                                </div>

                            </div>



                            <!-- FORMULÁRIO QUE SO ADM CONSEGUE VER-->
                            <div id="form-atualizacao" class="d-none">

                                <div class="card mb-3 shadow-sm card-general">
                                    <div class="card-title">
                                        <span>Formulário De Atualização</span>
                                    </div>

                                    <div class="card-body">
                                        <div>
                                            Utilize este formulário para postar as atualizações feitas.
                                        </div>
                                        <hr>

                                        <form action="" method="post" class="form-general">
                                            <input type="hidden" name="_token" value=""> <input type="hidden" name="acao" value="4">


                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label>Membro do C.R.H responsável pela atualização:</label>
                                                    <input type="text" name="usuario_promoveu_acao" class="form-control" maxlength="50" placeholder="Ex: hiagocarlos" required="">
                                                </div>

                                                <div class="col-md-6 spacing">
                                                    <label>Mensagem</label>
                                                    <select class="form-control" name="id_patente">
                                                        <option value="1">Atualização Realizada!</option>


                                                    </select>
                                                </div>



                                                <div class="col-md-6 spacing">
                                                    <label>Normas</label>
                                                    <p><span class="badge bg-principal text-white">INFO</span> Ao preencher este
                                                        requerimento, atesto que li e estou em total acordo com as normas de
                                                        rebaixamento.</p>
                                                </div>

                                            </div>
                                            <div class="form-group row">


                                                <button class="btn btn-send">Enviar</button>

                                        </form>
                                    </div>
                                </div>

                            </div>


                        </div> <!-- Fim col-md-8 -->
                    </div> <!-- Fim da row -->
                </div> <!-- Fim da div#requerimentos -->

                <div class="card mb-4 shadow-sm" id="442204" style="border-color: #ccc">

                    <div class="card-header text-white font-weight-bold bg-primary">
                        <span>Cadastro de Medico</span> <small>- 11 Ago 2022 20:00:53</small>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-3">

                                <div style="border: 1px solid #ccc; padding: 10px 18px;">
                                    <p class="text-center font-weight-bold text-danger"><a href="" style="color: #4F4F4F;" target="_blank"><?php echo $_SESSION['nome']; ?></a></p>
                                    <div class="img-habbo"></div>
                                    <hr class="mb-2">
                                    <div class="info-usuario">
                                        <p><strong>Mensagens:</strong> 1 </p>
                                        <p><strong>Cargo:</strong> Gerente</p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-9">


                                <p class="mb-3"><span style="text-decoration: underline;"><?php echo $_SESSION['nome']; ?></span> escreveu: </p>
                                <p><strong>CPF Gestao: </strong> {{cpfGestao}} </p>
                                <p><strong>Nome do Medico(a): </strong> {{NomeMedico}} </p>
                                <p><strong>Especialidade:</strong> {{Especialidade}} </p>
                                <p><strong>CFP do Medico:</strong> {{cpf}} </p>
                                <p><strong>CRM:</strong> {{crm}} </p>
                                <p><strong>Data de Nascimento: </strong> {{Nascimento}} </p>

                                <p class="mt-2 font-weight-bold">[x] Li e concordo com as normas de postagem de agendamento.</p>


                                <!-- [SE O REQUERIMENTO FOR DO TIPO ATUALIZACAO_CRH, TODO O CÓDIGO ABAIXO SERÁ DESCONSIDERADO] -->

                                <hr class="hr">
                                <p><strong>Status:</strong>
                                    <span class="badge badge-success">Aprovado</span>
                                </p>

                                <p><strong>Usuário responsável:</strong> Gessika </p>
                                <p><strong>Motivo:</strong> De acordo com o requerimento</p>
                                <p class="mb-2"><strong>Data da decisão: </strong>11 Ago 2022 - 18:37:48</p>


                                <a href="" class="badge badge-secondary">Cancelar</a>
                                <br>
                                <br>
                                <!-- [SE O REQUERIMENTO FOR DO TIPO ADM, TODO O CÓDIGO ABAIXO SERÁ DESCONSIDERADO] -->
                                <a href="#"><span onclick="javascript:abrir('P_aprovar_Cadastro_Medico.php');" class="badge badge-success">Atualizar</span> </a>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <script src="mascara.js"></script>
    <script src="BotaoDeslizar.js"></script>
    <script src="Menu.js"></script>
    <script src="Cad_Medico.js"></script>
</body>

</html>