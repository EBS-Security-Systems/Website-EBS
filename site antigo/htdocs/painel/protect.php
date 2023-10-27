<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['ID_USER'])) {
    //die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <script>setInterval(window.location.href = 'api-ebs-web.epizy.com/login');</script>
  <title>EBS-WEB</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="https://ebs-systems.epizy.com/images/2º ÌCONE EBS-SYSTEM v2.1 -not shadow.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>setInterval(window.location.href = '/login');</script>
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

        <section class="container">
            <div class="col-sm-6 text-center">
                <img class="img-responsive img-rounded" src="https://i.kym-cdn.com/photos/images/newsfeed/001/339/401/1ab.gif" alt="">
            </div>
            <div class="col-sm-6 text-center jumbotron" style="
            background: black;
            color: white;
            margin-block: 5%;
        ">
    <h2>Espere um pouco...</h2>
              <p>Acesso negado! Faça <a href="/login" style="color: white"><b>login</b></a> para continuar!</p>
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
<?php
 
  header('Location: /login');
}
?>