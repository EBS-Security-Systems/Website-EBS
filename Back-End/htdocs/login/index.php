<!DOCTYPE html>
<?php
    require_once '../php/class.php';
    $cls = new database;
?>
<html lang="pt-br">
<head>
  <title>EBS-WEB - Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/images/2º ÌCONE EBS-SYSTEM v2.1 -not shadow.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="
background-image: linear-gradient(45deg, green, black);
">
    <style>
    .mycss{
        background-color: black; 
        color: white;
    }
    </style>
    <div class="jumbotron text-center mycss">
        <h1 style="background-image: linear-gradient(0deg, black, green,black);"> EBS <img src="/login/cropped-imgfinal.png"> WEB</h1>
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
        </div>
    <div class="container">        
        <div class="row">  <div class="col-sm-3"></div>                         
          <div class="col-sm-6">
          <div class="jumbotron mycss"><div id="entrar" class="tab-pane fade in active">
                                <h3>Faça login para continuar</h3> 
                                 <?php
        if(isset($_POST['email']) || isset($_POST['password']))
        {
            $user = addslashes($_POST['email']);
            $password = addslashes($_POST['password']);

            for ($i=0; $i < 255; $i++) { 
              $password = sha1($password);
            } 

            if(!empty($user) && !empty($password))
            {
                $cls->conectar("epiz_33009677_Users", "sql305.epizy.com", "epiz_33009677", "YRZT7sWOmZNP4Ge");
                if($cls->msg == "")
                {
                    if($cls->login($user, $password))
                    {
                        header("Location: ../painel/index.php");
                    }
                    else
                    {
                       //echo "Usuário ou senha incorretos!";
                       ?>
                        
                        <div class="alert alert-danger" style="margin-top: 5px"><strong>Login ou senha incorretos!</strong></div>
        

                       <?php
                    }
                }
                else
                {
                    //echo "Erro ao conectar!!!".$cls->msg;
                    ?>
                    <div class="alert alert-danger" style="margin-top: 5px"><strong>Erro na conexão com banco de dados!</strong></div>
                    <?php
                    echo $cls->msg;
                }
                

            }
            else
            {
              echo('<div class="alert alert-danger" style="margin-top: 5px"><strong>Preencha todos os campos!</strong></div>');
            }
        }
    ?>                                      
                                  <form method="POST">
                                        <div class="input-group" style="
    margin-block: 5px;
">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                          <input id="email" type="text" class="form-control" name="email" placeholder="E-mail">
                                        </div>
                                        <div class="input-group" style="
    margin-block: 5px;
">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                          <input id="password" type="password" class="form-control" name="password" placeholder="Senha">
                                        </div>
                                        <div class=" input-group-btn">                  
                                        <input id="button" type="submit" class="form-control" style="font-weight: bold; margin-block-end: 5px;" name="button" value="ENTRAR">
                                        </div><p style="
    font-size: 11pt;
">Não tem uma conta? <a href="/insert-user/">Cadastre-se agora!</a></p>
                                      </form>
                                                                             
 
                                              </div>
            </div>
                      </div>
                                     
            <div class="col-sm-3"></div>
        </div>
        
      </div>
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