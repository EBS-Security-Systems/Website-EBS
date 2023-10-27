<!DOCTYPE html>
<html lang="pt-br"><head>
  <title>EBS-WEB - Error</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/images/2º ÌCONE EBS-SYSTEM v2.1 -not shadow.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script></head>

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
      <div class="row">  <div class="col-sm-4"></div>                         
        <div class="col-sm-4">
          <div class="jumbotron mycss">
            <h2 class="text-center">
              Erro #400              
            </h2>
            <p style="text-align: center">
              Solicitação inválida!<br> <a style="color: white" href="/">Página inicial</a>
            </p>
          </div>
        </div>

        <div class="col-sm-4"></div>
      </div>

    </div>
    <!-- <footer class="text-center mycss" style="
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
    </footer> -->
    
    <?php
    
    $file = fopen('../../footer.html', "r", 0);

    $footer = fread($file, filesize('../../footer.html'));
    echo($footer);
    ?>

  </body></html>