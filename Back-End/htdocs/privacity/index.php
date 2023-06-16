<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Importando o Bootstrap -->
  <link rel="shortcut icon" href="/images/2º ÌCONE EBS-SYSTEM v2.1 -not shadow.png">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <title>Política de Privacidade - EBS Security Systems</title>
  <style>
      .mycss{
        background-color: black; 
        color: white;
      }
      .slideanim {visibility:hidden;}
      .slide {
        animation-name: slide;
        -webkit-animation-name: slide;
        animation-duration: 1s;
        -webkit-animation-duration: 1s;
        visibility: visible;
      }
    </style>
</head>
<body style="
               background-image: linear-gradient(45deg, black, green, black, green );
               ">
  
  <?php
    $file = fopen("../header.html", "r", 0);

    $header = fread($file, filesize("../header.html"));
    echo($header);
    ?>

<!-- Início do conteúdo da página -->
    <section class="jumbotron container" style="border-radius: 10px; padding-block: 15px; margin-top: 10px;">

  <h1 class="text-center">Política de Privacidade</h1>
  <h2 class="text-center">
    EBS Security Systems
      </h2>

  <h6 class="lead">Última atualização: 16 de junho de 2023</h6>
                            <hr style="border: 0; border-top: 3px solid black;">

  <h3><b>1 - Informações pessoais que coletamos</b></h3>

  <p>Coletamos informações pessoais como nome, endereço de e-mail e informações demográficas quando você se inscreve em nossa newsletter ou faz uma compra em nosso site. Também podemos coletar informações sobre como você usa o nosso site, como páginas visitadas e tempo gasto em cada página.</p>

      <h3><b>2 - Cookies e outras tecnologias de rastreamento</b></h3>

  <p>Utilizamos cookies e outras tecnologias de rastreamento para personalizar a sua experiência no nosso site e para coletar informações sobre como você interage com o site. Essas informações nos ajudam a melhorar o conteúdo e a funcionalidade do nosso site. Você pode optar por não permitir o uso de cookies alterando as configurações do seu navegador.</p>

  <h3><b>3 - Uso das informações pessoais</b></h3>

  <p>As informações pessoais que coletamos são utilizadas para processar pedidos, enviar newsletters e melhorar a experiência do usuário no nosso site. Também podemos utilizar essas informações para entrar em contato com você sobre produtos e serviços relacionados ao nosso negócio.</p>

  <h3><b>4 - Divulgação de informações pessoais</b></h3>

  <p>Não vendemos, trocamos ou transferimos as suas informações pessoais para terceiros sem o seu consentimento, exceto quando exigido por lei ou para cumprir com obrigações contratuais.</p>

  <h3><b>5 - Segurança das informações pessoais</b></h3>

  <p>Implementamos medidas de segurança para proteger as suas informações pessoais contra o acesso não autorizado ou uso indevido. No entanto, nenhuma transmissão de dados pela internet é 100% segura. Sendo assim, não podemos garantir a segurança total das informações enviadas por meio do nosso site.</p>

  <h3><b>6 - Links para outros sites</b></h3>

  <p>O nosso site pode conter links para outros sites que não são controlados por nós. Esta política de privacidade se aplica apenas ao nosso site, sendo assim, recomendamos que você leia as políticas de privacidade dos sites que visitar.</p>

  <h3><b>7 - Alterações na Política de Privacidade</b></h3>

  <p>Reservamos o direito de modificar esta Política de Privacidade a qualquer momento. É de sua responsabilidade verificar periodicamente esta página para atualizações.</p>

  <h3><b>8 - Contato</b></h3>

  <p>Se tiver alguma dúvida sobre esta Política de Privacidade ou sobre como lidamos com informações pessoais, entre em contato conosco através do e-mail <a href="mailto:thiagosousa81@gmail.com">thiagosousa81@gmail.com</a>.</p>

  <p>Agradecemos a sua confiança no nosso site, pois fazemos o possível para garantir a segurança e privacidade das suas informações pessoais através das nossas aplicações de segurança.</p>

  </section>
<!-- Fim do conteúdo da página -->

<!-- Importando o JQuery e o Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  
  <?php
    $file = fopen("../footer.html", "r", 0);

    $footer = fread($file, filesize("../footer.html"));
    echo($footer);
    ?>
</body>
</html>
