<?php

include('protect.php');


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>EBS-WEB - Painel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="https://ebs-systems.epizy.com/images/2º ÌCONE EBS-SYSTEM v2.1 -not shadow.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="
    background-image: linear-gradient(45deg, black, green, black, green);
">
    <style>
        .mycss{
            background-color: black; 
            color: white;
        }
        </style>
        <header class="jumbotron text-center mycss">
            <h1 style="background-image: linear-gradient(0deg, black, green,black);"> EBS <img src="https://ebs-systems.epizy.com/login/cropped-imgfinal.png"> WEB</h1>
            <code style="
                -webkit-text-size-adjust: 125%;
                -webkit-tap-highlight-color: rgba(0,0,0,0);
                line-height: 1.42857143;
                text-align: center;
                box-sizing: border-box;
                font-family: Menlo,Monaco,Consolas,&quot;Courier New&quot;,monospace;
                padding: 2px 4px;
                font-size: 100%;
                color: green;
                background-color: #f9f2f4;
                border-radius: 4px;
                margin-inline: 10px;
            ">Encryption's Builder Studio, agora na versão web!</code>
        </header>

        <section class="jumbotron container" style="border-radius: 10px; padding-block: 15px;">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Perfil <span class="glyphicon glyphicon-user"></span></a></li>
                <li><a data-toggle="tab" href="#menu1">Aplicações <span class="glyphicon glyphicon-cog"></span></a></li>
                <li><a data-toggle="tab" href="#menu2">Sobre <span class="glyphicon glyphicon-book"></span></a></li>
              </ul>
              
              <div class="tab-content jumbotron">
                <div id="home" class="tab-pane fade in active">
                    
                        <h2>Informações da conta</h2>                        
                                                    
                    <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">
                    <div class="row" style="display: flex">
                        <div class="col-sm-2">                            
                            <img class="img-circle img-responsive" src="https://st.depositphotos.com/1842549/3903/i/600/depositphotos_39038955-stock-photo-user-profile-icon.jpg" alt="Foto do perfil" style="width: 90px">
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ModalPhoto">Alterar foto <span class="glyphicon glyphicon-camera"></span></button>
                       </div>
                    <div class="col-sm-10">                    
                        <h4><span class="glyphicon glyphicon-user"></span> Nome: </h4>
                        <h4><span class="glyphicon glyphicon-envelope"></span> E-mail: <a href="mailto:"></a></h4>
                        <h4><span class="glyphicon glyphicon-calendar"></span> Conta criada em: </h4>
                        <h4><span class="glyphicon glyphicon-thumbs-up"></span> Likes no EBS: </h4>
                    </div>
                    <div id="ModalPhoto" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                      
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Ops...</h4>
                            </div>
                            <div class="modal-body">
                              <p>Opção indisponível no momento!</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                            </div>
                          </div>
                      
                        </div>
                      </div>            
                    </div>
                  <hr style="border: 0; border-top: 3px solid black;">
                  <div class="row"></div>
                  <div class="col-sm-4">
                    <div class="panel-group">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" href="#collapse1"><h3>Opções da conta</h3></a>
                            </h4>
                          </div>
                          <div id="collapse1" class="collapse">
                            <ul class="list-group">
                              <li class="list-group-item">
                                <button class="btn btn-success well-bg" style="width: 100%;"><h5 style="margin-block: 0px;">Tornar-se PREMIUM <span class="glyphicon glyphicon-star"> </span></h5></button>
                              </li>
                              <li class="list-group-item">
                                <button class="btn btn-danger well-bg" style="width: 100%;"><h5 style="margin-block: 0px;">Excluir conta <span class="glyphicon glyphicon-trash"> </span></h5></button>
                              </li>                          
                            </ul>                        
                          </div>
                        </div>
                  </div>                  
                </div>                    
                <div class="col-sm-8">
                    <div class="panel-group">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" href="#collapse2"><h3>Avisos da EBS Security Systems</h3></a>
                            </h4>
                          </div>
                          <div id="collapse2" class="collapse">
                            <ul class="list-group">
                              <li class="list-group-item">                                
                                <p>Olá, meu nome é Thiago Sousa!<br><br>
                                    Sou eu a pessoa por traz de todo esse sistema<br><br>
                                    É um grande prazer vê-lo desfrutando os serviços de nossa startup! Estamos trabalhando para promover a segurança cibernética através dos nossos produtos. 
                                    <br> Caso tenha dificuldade com algo na nossa plataforma entre em contato...</p>
                              </li>                                                      
                            </ul>                        
                          </div>
                </div>               
            </div>  
                </div></div>
                <div id="menu1" class="tab-pane fade">
                    <h2 class="text-center">Catálogo de produtos</h2>
                    <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">
                    <section class="row" style="max-width: 100%;text-align: center;margin-inline: 0px;">
                        <div class="col-sm-6" style="text-align: center;">
                            <img src="https://gifs.eco.br/wp-content/uploads/2022/08/gif-animado-site-em-construcao-4.gif" class="img-fluid" alt="Imagem responsiva" style="max-width: 90%; margin-block-end: 10px;margin-inline: 4%;">
                        </div>
                        
                
                        <div class="col-sm-6">
                            <div class="jumbotron mycss text-center" style="margin-inline: 5%;border-radius: 10px;margin-block: 15%;">
                                <h3 style="color: white">Sistemas em construção</h3>
                                <p>Estamos em obras!!!</p>
                                <p>Em breve novas atualizações...</p>
                            </div>
                        </div>                                                
                        </section>
                </div>
                <div id="menu2" class="tab-pane fade">
                  <h2>Sobre a EBS Security Systems </h2>
                  <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">
                  <p style="text-align: justify">&nbsp&nbsp&nbsp&nbsp&nbspA <strong>Encryption's Builder Studio Security Systems</strong> é nada mais que uma pequena <i>startup</i> que está começando no mercado de trabalho de tecnologia.
                Desde o princípio, o nosso principal objetivo sempre foi desenvolver os mecanismos de segurança cibernética, especialmente a criptografia. <br><br>
                &nbsp&nbsp&nbsp&nbsp&nbspPartindo deste ponto, queremos nada mais que a sua colaboração com o desenvolvimento de novos métodos de encriptação através de uma grande comunidade de desenvolvimento, onde teremos pofissionais de matemática, física e tecnologia juntos, num espaço onde a ciência e a inovação estarão sendo promovidos constantemente.
                </p>
                </div>
              </div>
        </section>

       
          

    <footer class="text-center mycss" style="
    background-image: linear-gradient(0deg, black, green, black);
">
            <div class="container">
                <div class=" row">
                    <div class="col-sm-4" style="text-align: initial">
                        <h3><a href="https://ebs-systems.epizy.com/" style="color: white"><strong>Encryption's Builder Studio<br> Security Systems</strong></a></h3>
                        <p>Trabalhando árduamente pela segurança cibernética.</p>
<p>Siga-nos nas <a href="https://thiagosousa81.wordpress.com/#contato" style="color: white"><strong>redes sociais</strong></a></p>
                    </div>
                    <div class="col-sm-4" style="text-align: initial">
                        <h3>Navegação</h3>
                        <p>&gt; <a href="https://ebs-systems.com/" style="color: white">Home</a></p>
                        <p>&gt; <a href="https://ebs-systems.com/login" style="color: white">Login</a></p>
                        <p>&gt; <a href="https://ebs-systems.com/insert-user" style="color: white">Criar conta</a></p>
                    </div>
                    <div class="col-sm-4" style="text-align: initial">
                        <h3>Contato</h3>
                        <p>E-mail: <a href="mailto:thiagosousa81@gmail.com" style="color: white">thiagosousa81@gmail.com</a></p>
<p>WhatsApp +55 75 98858-3604</p>
                    </div>
                                       
                </div>
                <div class="row">
                    <h5 style="margin-top: 20px;">Thiago Sousa – 2023 – Todos os direitos de criação e desenvolvimento e publicação reservados.</h5>                  
                    <p>Sistema desenvolvido por <a href="http://thiagosousa81.wordpress.com/" target="_blank" style="margin-top: 10px; color: white">Thiago Sousa</a>.</p>                  
                </div>
            </div>
        </footer>
</body>
</html>