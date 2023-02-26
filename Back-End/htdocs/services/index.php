<!DOCTYPE html>
<html lang="pt-br"><head>
  <title>Serviços - EBS Security Systems</title>
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
    <?php
    $file = fopen("../header.html", "r", 0);

    $header = fread($file, filesize("../header.html"));
    echo($header);
    ?>
    <div class="container-fluid jumbotron" style="background-color: black">        
      <div class="row">
        <div class="col-sm-7" style="color: white;">
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
                  <td>Programação desktop</td>
                  <td>Desenvolvimento de programas sob medida para computadores menos potentes</td>
                  <td>~ 20 a 60 R$</td>
                  <td><a href="/login"><button type="button" class="btn btn-success">COMPRAR</button></a></td>
                </tr>
                <tr>
                  <td>Web-Site</td>
                  <td>Construção completa de web-site, com hospedagem gratuita</td>
                  <td>~ 20 a 50 R$</td>
                  <td><a href="/login"><button type="button" class="btn btn-success">COMPRAR</button></a></td>
                </tr>
                <tr>
                  <td>Loja virtual</td>
                  <td>Construção completa de loja virtual, com hospedagem gratuita</td>
                  <td>~ 30 a 60 R$</td>
                  <td><a href="/login"><button type="button" class="btn btn-success">COMPRAR</button></a></td>
                </tr>
                <tr>
                  <td>Web-Site Hospedado</td>
                  <td>Construção completa de web-site, com hospedagem paga</td>
                  <td>~ 30 a 70 R$</td>
                  <td><a href="/login"><button type="button" class="btn btn-success">COMPRAR</button></a></td>
                </tr>
               <tr>
                  <td>Loja virtual Hospedada</td>
                  <td>Construção completa de loja virtual, com hospedagem paga</td>
                  <td>~ 50 a 70 R$</td>
                  <td><a href="/login"><button type="button" class="btn btn-success">COMPRAR</button></a></td>
                </tr> 
                <tr>
                  <td>Automação desktop</td>
                  <td>Automação de tarefas em computadores</td>
                  <td>~ 0 a 5 R$</td>
                  <td><a href="/login"><button type="button" class="btn btn-success">COMPRAR</button></a></td>
                </tr>
                <tr>
                  <td>Otimização desktop</td>
                  <td>Otimização do sistema computacional completo, para melhorar a inicialização</td>
                  <td>~ 5 a 20 R$</td>
                  <td><a href="/login"><button type="button" class="btn btn-success">COMPRAR</button></a></td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
        <div class="col-sm-5">
          <div class="container jumbotron text-center" style="
    margin-block: 25%;
">
            <h3>
              Para qualquer dúvida sobre os serviços clique <a href="https://thiagosousa81.wordpress.com/#contato">aqui</a> e entre em contato
            </h3>
          </div>
        </div>        
      </div>
    </div>
    
    <section class="row" style="max-width: 100%;text-align: center;margin-inline: 0px;">
      <div class="col-sm-6" style="text-align: center;">
        <img src="https://gifs.eco.br/wp-content/uploads/2022/08/gifs-de-construcao-civil-14.gif" class="img-fluid" alt="Imagem responsiva" style="max-width: 90%; margin-block-end: 10px;margin-inline: 4%;">
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