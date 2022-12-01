//janela modal

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formulário de Login em Janela Modal com Bootstrap</title>
        <link rel="shortcut icon" href="../imagens/logo_tittle.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Link para o arquivo Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default"><!-- Código do NavBar -->
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html"><!-- Logo -->
                          Bootstrap
                        </a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><!-- Link que abre a janela modal -->
                                Entrar 
                                <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog"><!-- Início do código da janela modal -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><!-- Header do modal -->
                        <h4 class="modal-title">Login</h4><!-- Título -->
                    </div>
                    <div class="modal-body"><!-- Corpo do modal -->
                            <form method="post" action="../controller/V_login.php">
                                <div class="principal">
                                    <input type="text" name="usuario" required="" autocomplete="off">
                                    <label>Login</label>
                                </div>
                    
                                <div class="principal">
                                    <input type="password" name="senha" required="" autocomplete="off">
                                    <label>Senha</label>
                                </div>
                    
                                <?php
                                if(isset($_SESSION["nao_autenticado"])):
                                ?>
                    
                                <div class="noti">
                                    <p> ERRO: Usuário ou senha inválido. </p>
                                </div>
                    
                                <?php
                                endif;
                                ?>
                    
                                <div>
                                    <button type="submit" class="btn-personalizado">Entrar</button>
                                </div>
                            </form>
                    </div>
                    <div class="modal-footer"><!-- Footer do Modal -->
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Fechar <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>                
                    </div>
                </div>
            </div>
        </div><!-- ##Fim do Modal -->
        
        
        
        <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script><!-- Chama a biblioteca JQuery -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!-- Chama o arquivo Bootstrap JavaScript -->

        <p>Você pode usar a tag _mark_ para <mark>destacar</mark> textos.</p>
<p><del>Esta linha de texto deve ser tratada com um texto deletado.</del></p>
<p><s>Esta linha de texto deve ser tratada como algo impreciso.</s></p>
<p><ins>Esta linha de texto deve ser tratada como uma adição ao documento.</ins></p>
<p><u>Esta linha de texto vai ser renderizada com underline.</u></p>
<p><small>Esta linha deve ser usada para letras com tamanhos menores.</small></p>
<p><strong>Esta linha renderiza em negrito.</strong></p>
<p><em>Esta linha renderiza em itálico.</em></p>

<dl class="row">
  <dt class="col-sm-3">Listas de descrições</dt>
  <dd class="col-sm-9">Uma lista de descrições é perfeita para definir termos.</dd>

  <dt class="col-sm-3">Euismod</dt>
  <dd class="col-sm-9">
    <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
    <p>Donec id elit non mi porta gravida at eget metus.</p>
  </dd>

  <dt class="col-sm-3">Malesuada porta</dt>
  <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

  <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
  <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

  <dt class="col-sm-3">Aninhamento</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">Lista de defiinições aninhada</dt>
      <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
    </dl>
  </dd>
</dl>


    </body>
</html>