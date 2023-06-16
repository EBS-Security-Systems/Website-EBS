<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>EBS Security Systems</title>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="3xdx50DorW0BgAza_PUsK2xVgQGUZegVIt7wxWjDDF0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/images/2º ÌCONE EBS-SYSTEM v2.1 -not shadow.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" charset="UTF-8"
        href="https://translate.googleapis.com/translate_static/css/translateelement.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="
               background-image: linear-gradient(45deg, black, green, black, green );
               ">
    <script>
    function aceitarCookies() {
        document.cookie = "cookies_aceitos=true; expires=Thu, 01 Jan 2099 00:00:00 UTC;";
        document.getElementById("mensagem-cookies").style.display = "none";
    }

    if (document.cookie.indexOf("cookies_aceitos") === -1) {
        var mensagem = document.createElement("div");
        mensagem.innerHTML =
            "Nosso site utiliza cookies para melhorar sua experiência. Ao continuar navegando, você concorda com nossa <a href='/privacity/'>Política de Privacidade</a>.<button onclick='aceitarCookies();'>Aceitar</button>";
        mensagem.id = "mensagem-cookies";
        mensagem.style.position = "fixed";
        mensagem.style.bottom = "0";
        mensagem.style.left = "0";
        mensagem.style.right = "0";
        mensagem.style.backgroundColor = "#F5F5F5";
        mensagem.style.padding = "10px";
        mensagem.style.borderTop = "1px solid #CCC";
        mensagem.style.textAlign = "center";
        document.body.appendChild(mensagem);
    }
    </script>
    <?php
    $file = fopen("header.html", "r", 0);

    $header = fread($file, filesize("header.html"));
    echo($header);
    ?>


    <!--Conteúdo a partir daqui...-->
    <div class="container-fluid slide" style="
                                              background-color: black;
                                              padding-inline: 6px;
                                              ">
        <div class="col-sm-6" style="max-width: 100%;overflow: auto;">
            <h1 style="color: white;margin-block: 15%;margin-block-end: 50px;">A mais de 3 anos criando <b>Sistemas de
                    Informação</b> com <b>Alto Desempenho</b> e <b>Segurança Máxima</b>!</h1>
            <div style="text-align: center;">
                <a href="/services" target="_blank">
                    <img src="https://img.shields.io/badge/PEÇA JÁ O SEU-nocolor?style=flat"
                        style="width: auto;height: 50px;">
                </a>
            </div>

        </div>
        <div class="col-sm-6" style="
                           max-width: 100%;
                           ">
            <a href="https://github.com/ThiagoSousa81/#readme" target="_blank"><img
                    src="https://github-readme-streak-stats.herokuapp.com/?user=thiagosousa81&amp;show_icons=true&amp;locale=pt-br&amp;theme=chartreuse-dark&amp;layout=compact&amp;PAT_1=thiagosousa81"
                    alt="Status de contribuíção" style="
    width: 90%;
    margin-inline-start: 5%;
    margin-block: 10%;
          "></a>
        </div>
    </div>

    <div style="background-color: white; color: black">
        <h3 class="container-fluid">
            Como tudo começou... <a href="/slide.php">Ver slide</a>
        </h3>
    </div>
    <!--<div class="alert alert-warning container fade in alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
        <strong>ATENÇÃO!</strong> Aguarde o carregamento completo das imagens! Vale a pena!
    </div>-->

    <div id="myCarousel" class="carousel slide container" data-ride="carousel" style="width: 90%;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active">
                <img src="/images/EBS-Windows 11.png" alt="" style="width:100%;">
                <div class="carousel-caption" style="background-color: black;">
                    <h5>Tudo começou com um aplicativo...</h5>

                </div>
            </div>

            <div class="item">
                <img src="/images/Gif programe.gif" alt="" style="width:100%;">
                <div class="carousel-caption" style="background-color: black;">
                    <h5>A partir dele fomos desenvolvendo o conhecimento...</h5>

                </div>
            </div>

            <div class="item">
                <img src="/images/Premiação FECIBA - Principal .png" alt="Foto Premiação" style="width:100%;">
                <div class="carousel-caption" style="background-color: black;">

                    <h5>E ganhamos o 1º lugar na 10º FECIBA</h5>
                </div>
            </div>
            <div class="item">
                <img src="/images/4imgslide.png" alt="EBS no Git-Hub" style="width:100%;">
                <div class="carousel-caption" style="background-color: black;">

                    <h5>Assim iniciou-se uma <i>startup</i> focada no desenvolvimento de Software Seguro</h5>
                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!--Conteúdo a partir daqui...-->


    <div class="container-fluid jumbotron text-center" style="
                                                              margin-bottom: 0px;
                                                              background-color: black;
                                                              ">
        <h2 style="
                 color: white;
                 ">Não paramos por aí...</h2>
        <h4 style="
                 color: white;
                 ">Todo respaldo acadêmico pode ser rentável. </h4>
        <div class="row">
            <div class="col-sm-7">
                <h4 style="text-align: justify;color: white;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"><br>A partir dos pequenos estudos de caso, nasceu a <a
                                href="#" style="color: white">"<strong>EBS Security
                                    Systems</strong>"</a>.<br><br>Começamos como uma pequena <i>startup</i> que está
                            ingressando no mercado de desenvolvimento de softwares em geral.<br><br>Juntamente com isso,
                            focamos em desenvolver ambientes onde pessoas podem criar novos algoritmos de encriptação
                            simplesmente trocando experiências.<br><br>Isso é só pra início de conversa, porque o que
                            importa é o que vem aí...</font>
                    </font>
                </h4>



            </div>
            <div class="col-sm-5" style="
                                     background-image: linear-gradient(180deg, black, green, black);
                                     padding: 25px;
                                     ">
                <div class="">
                    <img class="img-fluid" src="/images/2º ÌCONE EBS-SYSTEM v2.1.png"
                        style="max-width: 50%;/* margin-inline: 4%; *//* margin-block: 10%; */">
                    <h4 class="text-center" style="
    color: white;
">Encryption's Builder Studio<br>Security Systems</h4>

                </div>
            </div>
        </div>
    </div>
    <div id="mvv" class="jumbotron text-center" style="margin-block: 0px;">
        <div class="row" style="max-width: 100%; padding-inline-start: 30px">
            <div class="col-sm-4" style="background-color: black;padding-block: 20px;">
                <h2 style="color: white">
                    Missão
                </h2>
                <span class="glyphicon glyphicon-globe logo slide" style="color: white; font-size: 72pt"></span>
                <p style="color: white; padding-inline: 15px;">
                    <a href="#" style="color: white"><strong>A EBS Security Systems</strong></a> tem como missão
                    oferecer soluções inovadoras e eficazes para proteger a privacidade e segurança dos usuários na
                    internet, garantindo um ambiente virtual mais seguro e confiável.
                </p>
            </div>
            <div class="col-sm-4" style="
    padding-block: 20px;
">
                <h2>
                    Visão
                </h2>
                <span class="glyphicon glyphicon-eye-open logo slide" style="color: black; font-size: 72pt"></span>
                <p style="color: #303030; padding-inline: 15px;">
                    Acreditamos que todos têm direito a um ambiente virtual seguro e livre de ameaças. Queremos ser
                    referência em <a href="https://github.com/EBS-Security-Systems/" style="color: black"><b>segurança
                            cibernética</b>,</a> trabalhando em conjunto com nossos colaboradores para alcançar esse
                    objetivo.
                </p>
            </div>
            <div class="col-sm-4" style="background-color: black;padding-block: 20px;">
                <h2 style="color: white">
                    Valores
                </h2>
                <span class="glyphicon glyphicon-signal logo slide" style="color: white; font-size: 72pt"></span>
                <p style="color: white; padding-inline: 15px;">
                    Somos uma empresa comprometida com a transparência, ética, responsabilidade social e inovação. <a
                        href="/services" style="color: white"><strong>Nossos serviços</strong></a> são baseados na
                    qualidade, confiabilidade e excelência no atendimento ao cliente.
                </p>
            </div>
        </div>
    </div>
    <div id="applications" class="jumbotron text-center mycss slide" style="margin-block: 0px;">
        <p style="
                text-align: center;
                ">Tenha acesso ilimitado a nossas aplicações pelo...</p>
        <h1 style="background-image: linear-gradient(0deg, black, green,black);"> EBS <img
                src="/login/cropped-imgfinal.png"> WEB</h1>
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
                   ">Encryption's Builder Studio na web!</code>
        <div style="
    margin-top: 5px;
"><a href="https://api-ebs-web.epizy.com/login"><button type="button"
                    class="btn btn-default"><strong>LOGIN</strong></button></a> <a
                href="https://api-ebs-web.epizy.com/singup"><button type="button"
                    class="btn btn-default"><strong>CADASTRE-SE</strong></button></a> <a
                href="https://idc.ebs-systems.epizy.com/"><button type="button"
                    class="btn btn-default"><strong>COMUNIDADE</strong></button></a></div>

    </div>
    <div class="container-fluid text-center jumbotron">
        <h2>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">O QUE PLANEJAMOS PARA ESTE ANO ?</font>
            </font>
        </h2>
        <h4>Estamos criando algumas aplicações...</h4>

        <br>
        <div class="row slideanim slide">
            <div class="col-sm-4">
                <img src="/images/Cadeado.png" alt="" style="width: 20%">
                <h4><a href="https://github.com/EBS-Security-Systems/EBS-Docs/blob/main/docs/EBS-GUI.md">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">EBS-GUI <span
                                    class="glyphicon glyphicon-new-window"></span></font>
                        </font>
                    </a></h4>
                <p>
                    <font style="vertical-align: inherit; color: black">
                        <font style="vertical-align: inherit;">O nosso Estúdio Construtor de Encriptação, integrado com
                            uma comunidade que constrói a todo tempo novos algoritmos de encriptação.</font>
                    </font>
                </p>
            </div>
            <div class="col-sm-4">
                <img src="/images/Cadeado.png" alt="" style="width: 20%">
                <h4><a href="https://cli.ebs-systems.epizy.com/">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">EBS-CLI <span
                                    class="glyphicon glyphicon-new-window"></span></font>
                        </font>
                    </a></h4>
                <p>
                    <font style="vertical-align: inherit; color: black">
                        <font style="vertical-align: inherit;">Um ambiente de linha de comando para gerenciar processos
                            de criptografia.</font>
                    </font>
                </p>
            </div>
            <div class="col-sm-4">
                <img src="/images/Cadeado.png" alt="" style="width: 20%">
                <h4><a href="https://csp.ebs-systems.epizy.com/">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">EBS-CSP <span
                                    class="glyphicon glyphicon-new-window"></span></font>
                        </font>
                    </a></h4>
                <p>
                    <font style="vertical-align: inherit; color: black">
                        <font style="vertical-align: inherit;">O melhor Framework de provimento de serviços de
                            encriptação para linguagens de programação.</font>
                    </font>
                </p>
            </div>
        </div>
        <br><br>
        <div class="row slideanim slide">
            <div class="col-sm-4">
                <img src="/images/Cadeado.png" alt="" style="width: 20%">
                <h4><a href="https://github.com/EBS-Security-Systems/EBS-Docs/blob/main/docs/EBS-KMS.md">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">EBS-KMS <span
                                    class="glyphicon glyphicon-new-window"></span></font>
                        </font>
                    </a></h4>
                <p>
                    <font style="vertical-align: inherit; color: black">
                        <font style="vertical-align: inherit;">Mantém o gerenciamento das suas senhas 100% seguro.
                        </font>
                    </font>
                </p>
            </div>
            <div class="col-sm-4">
                <img src="/images/Cadeado.png" alt="" style="width: 20%">
                <h4><a href="https://github.com/EBS-Security-Systems/EBS-Docs/blob/main/docs/EBS-ISE.md">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">EBS-ISE <span
                                    class="glyphicon glyphicon-new-window"></span></font>
                        </font>
                    </a></h4>
                <p>
                    <font style="vertical-align: inherit; color: black">
                        <font style="vertical-align: inherit;">Ambiente de script integrado para fazer sua própria
                            encriptação.</font>
                    </font>
                </p>
            </div>
            <div class="col-sm-4">
                <img src="/images/Cadeado.png" alt="" style="width: 20%">
                <h4 style="color:#303030;"><a
                        href="https://github.com/EBS-Security-Systems/EBS-Docs/blob/main/docs/EBS-HMS.md">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">EBS-HMS <span
                                    class="glyphicon glyphicon-new-window"></span></font>
                        </font>
                    </a></h4>
                <p>
                    <font style="vertical-align: inherit; color: black">
                        <font style="vertical-align: inherit;">Um serviço de mensagens ocultas ideal para compartinhar
                            segredos.</font>
                    </font>
                </p>
            </div>
        </div>
    </div>


    <section class="row" style="max-width: 100%;text-align: center;margin-inline: 0px;">
        <div class="col-sm-6" style="text-align: center;">
            <img src="https://gifs.eco.br/wp-content/uploads/2022/08/gifs-de-construcao-civil-14.gif" class="img-fluid"
                alt="Imagem responsiva"
                style="max-width: 90%; margin-block-end: 10px;margin-inline: 4%; border-radius: 10px">
        </div>


        <div class="col-sm-6">
            <div class="jumbotron mycss text-center"
                style="margin-inline: 5%;border-radius: 10px;margin-block: 15%;padding-inline: 5px;">
                <h2 style="color: white">Sistema em construção</h2>
                <p>Estamos em obras!!!</p>
                <p>Em breve novas atualizações...</p>
            </div>
        </div>


    </section>

    <div class="jumbotron" style="background-color: black; margin-block: 0px">
        <div id="about" class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <h2 style="
                       color: white;
                       ">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Tudo isso pra que?</font>
                        </font>
                    </h2><br>
                    <h4 style="
                       color: white;
                       ">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Com o passar do tempo o que era seguro já não é mais!
                                Estudamos desde 2021 sobre como proporcionar segurança na web e estamos trabalhando para
                                tornar isso uma realidade para todos.</font>
                        </font>
                    </h4><br>
                    <a href="https://thiagosousa81.wordpress.com/ebs/" target="_blank"><button
                            class="btn btn-default btn-lg" style="width: 100%">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><strong>SAIBA MAIS</strong></font>
                            </font>
                        </button></a>
                </div>
                <div class="col-sm-8">
                    <div style="overflow: hidden;max-height: 430px;" class="slideanim slide">
                        <img class="mx-auto d-block img-fluid" src="/images/EBS 1.png" alt="" style="
                                                                                         width: 100%;
                                                                                         ">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $file = fopen("footer.html", "r", 0);

    $footer = fread($file, filesize("footer.html"));
    echo($footer);
    ?>

</body>

</html>
