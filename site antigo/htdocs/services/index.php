<!DOCTYPE html>
<html lang="pt-br"><head>
  <title>Serviços - EBS Security Systems</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/images/2º ÌCONE EBS-SYSTEM v2.1 -not shadow.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><style>
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
    </style></head>

  <body style="
               background-image: linear-gradient(45deg, green, black);
               ">
    
    <?php
    $file = fopen("../header.html", "r", 0);

    $header = fread($file, filesize("../header.html"));
    echo($header);
    ?>
    <div class="container-fluid jumbotron" style="background-color: black">  
      <div class="container-fluid jumbotron text-center" style="
">
            <h4>
              Entre em contato <a href="https://thiagosousa81.wordpress.com/#contato">aqui</a>
              para agendar um serviço, ou acesse a <a href="https://api-ebs-web.epizy.com/#services">Área do Cliente >>> Menu >>> Serviços</a></h4>
          </div><div class=" slide alert alert-warning fade in alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
        <strong>Atenção!</strong> Os valores dos nossos serviços estão em reajuste! Role a tabela para visualizar todos os serviços
      </div>
      
<div class="container-fluid slide">
        <div class="" style="color: white;">
          <div class="table-responsive">          
            <table class="table">
              <thead>
                <tr>
                  <th>Serviço</th>
                  <th>Descrição</th>
                  <th>Variação de preço</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Automação comercial</td>
                  <td>Desenvolvimento de automações comerciais sob medida</td>
                  <td>A definir...</td>
                  <td><a href="/login"><button type="button" class="btn btn-success">COMPRAR</button></a></td>
                </tr>
                <tr>
                  <td>Web-Site Corporativo</td>
                  <td>Construção completa de web-site, com hospedagem gratuita ou paga</td>
                  <td>A definir...</td>
                  <td><a href="/login"><button type="button" class="btn btn-success">COMPRAR</button></a></td>
                </tr>
                <tr>
                  <td>Loja virtual</td>
                  <td>Construção completa de loja virtual, com hospedagem gratuita ou paga</td>
                  <td>A definir...</td>
                  <td><a href="/login"><button type="button" class="btn btn-success">COMPRAR</button></a></td>
                </tr>
                <tr>
                  <td>Sistema de Informação Gerencial</td>
                  <td>Desenvolvimento de SIG para cadastros de diversos tipos, com níveis de acesso para usuários</td>
                  <td>A definir...</td>
                  <td><a href="/login"><button type="button" class="btn btn-success">COMPRAR</button></a></td>
                </tr>
               <tr>
                  <td>Controle de Caixa</td>
                  <td>Software de controle de caixa sob medida</td>
                  <td>A definir...</td>
                  <td><a href="/login"><button type="button" class="btn btn-success">COMPRAR</button></a></td>
                </tr> 
                <tr>
                  <td>Sistema de Controle de Estoque</td>
                  <td>Software para controle do estoque, elaborado sob medida</td>
                  <td>A definir...</td>
                  <td><a href="/login"><button type="button" class="btn btn-success">COMPRAR</button></a></td>
                </tr>
                <tr>
                  <td>Sistema de Agendamento</td>
                  <td>Software para clientes realizarem vários tipos de agendamento</td>
                  <td>A definir...</td>
                  <td><a href="/login"><button type="button" class="btn btn-success">COMPRAR</button></a></td>
                </tr>
                <tr>
                  <td>Otimização desktop</td>
                  <td>Otimização do sistema computacional completo, para melhorar a inicialização</td>
                  <td>A definir...</td>
                  <td><a href="/login"><button type="button" class="btn btn-success">COMPRAR</button></a></td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
        <div class="">
          
        </div>        
      </div>
    </div>
    
    <section class="row" style="max-width: 100%;text-align: center;margin-inline: 0px;">
      <div class="col-sm-6" style="text-align: center;">
        <img src="https://gifs.eco.br/wp-content/uploads/2022/08/gifs-de-construcao-civil-14.gif" class="img-fluid" alt="Imagem responsiva" style="max-width: 90%; margin-block-end: 10px;margin-inline: 4%; border-radius: 10px;">
      </div>


      <div class="col-sm-6">
        <div class="jumbotron mycss text-center" style="margin-inline: 5%;border-radius: 10px;margin-block: 15%;padding-inline: 5px;">
          <h2 style="color: white">Sistema em construção</h2>
          <p>Estamos em obras!!!</p>
          <p>Em breve novas atualizações...</p>
        </div>
      </div>


    </section>
    
    <?php
    $file = fopen("../footer.html", "r", 0);

    $footer = fread($file, filesize("../footer.html"));
    echo($footer);
    ?>

  </body></html>
