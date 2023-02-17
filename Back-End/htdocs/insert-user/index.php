<!DOCTYPE html>
<?php
include('./php/conexao.php');
?>
<html lang="pt-br">
<head>
  <title>EBS-WEB - Cadastro</title>
  <script>setInterval(window.location.href = 'https://api-ebs-web.epizy.com/singup');</script>
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
    <div class="jumbotron text-center mycss" style="
    margin-block-end: 0px;
">
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
        ">Encryption's Builder Studio na web!</code>
        </div>
<nav class="navbar-default" style="margin-bottom: 30px;">
            <div class="container-fluid" style="padding-block: 0%; display: flex">
                <div><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></div>
                <div style="margin-inline-start: 15px;"><a href="/insert-user"><span class="glyphicon glyphicon-user"></span> Registro</a></div> 
            </div>
            </nav>
    <div class="container">        
        <div class="row">                           
          <div class="col-sm-6">
                <div class="jumbotron mycss">
                    <h3>Cadastre-se em nossa rede de sistemas</h3>                                  
                    <?php
                                if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['password']) || isset($_POST['cpassword'])) {
                                    $nome = addslashes($_POST['nome']);                                    
                                    $email = addslashes($_POST['email']);
                                    $password = addslashes($_POST['password']);
                                    $cpassword = addslashes($_POST['cpassword']);
                                    if (!empty($nome) && !empty($email) && !empty($password) && !empty($cpassword)) {
                                        if ($password == $cpassword) {
                                            if(filter_var($email, FILTER_VALIDATE_EMAIL))
                                            {//a partir daqui cadastramos no banco de dados
                                                for ($i=0; $i < 255; $i++) { 
                                                    $password = sha1($password);
                                                }                                                
                                                $timezone = new DateTimeZone('America/Sao_Paulo');                                         
                                                $now = new DateTime('now', $timezone);
                                                $data = $now->format('Y/m/d');
                                                $hora = $now->format('H:i');

                                                $usuario = 'epiz_33009677';
                                                $senha = 'YRZT7sWOmZNP4Ge';
                                                $database = 'epiz_33009677_Users';
                                                $host = 'sql305.epizy.com';

                                                $mysqli = new mysqli($host, $usuario, $senha, $database);

                                                if($mysqli->error) {
                                                    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
                                                }

                                                $sql_code = "INSERT INTO `CONTAS`(`ID_USER`, `NOME_USER`, `EMAIL_USER`, `HASH_USER`, `ATIVO_USER`, `DATA_USER`, `HORA_USER`) VALUES ('', '$nome', '$email', '$password', 1, '$data', '$hora')";
                                                $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ".$mysqli->error);

                                                echo('<div class="alert alert-success" style="margin-top: 5px"><strong>Usuário cadastrado com sucesso!</strong></div>');
                                            }
                                            else{
                                                echo('<div class="alert alert-danger" style="margin-top: 5px"><strong>Endereço de e-mail inválido!</strong></div>');
                                            }
                                        }
                                        else
                                        {
                                            echo('<div class="alert alert-danger" style="margin-top: 5px"><strong>Senhas diferentes!/strong></div>');
                                        }
                                    }
                                    else{
                                        echo('<div class="alert alert-danger" style="margin-top: 5px"><strong>Preencha todos os campos!</strong></div>');
                                    }                                    
                                
                                }                                
                              ?>
                    <form method="POST">
                            <div class="input-group" style="margin-block: 5px;">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="nome" type="text" class="form-control" name="nome" placeholder="Nome">
                            </div>
                            <div class="input-group" style="margin-block: 5px;">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="email" type="text" class="form-control" name="email" placeholder="E-mail">
                                </div>
                            <div class="input-group" style="margin-block: 5px;">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Senha">
                            </div>
                            <div class="input-group" style="margin-block: 5px;">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                <input id="cpassword" type="password" class="form-control" name="cpassword" placeholder="Confirmar senha">
                            </div>
                            <div class=" input-group-btn">                  
                                <input id="button" type="submit" class="form-control" style="font-weight: bold;" name="button" value="CADASTRAR">
                            </div>
                            </form>                                                      
                              </div>
                      </div>             
            <div class="col-sm-6">
                    <div class="jumbotron text-center mycss">
                          <h2>Seja bem vindo ao EBS-WEB!</h2>
                          <p>Criando uma conta aqui você terá acesso a uma dedicada rede de sistemas de desenvolvimento de algoritmos de encriptação do mercado.</p>     
                    </div>                                
                </div>   
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
                        <p>&gt; <a href="https://ebs-systems.epizy.com/" style="color: white">Home</a></p>
                        <p>&gt; <a href="https://ebs-systems.epizy.com/login" style="color: white">Login</a></p>
                        <p>&gt; <a href="https://ebs-systems.epizy.com/insert-user" style="color: white">Criar conta</a></p>
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