<?php
require "php/crud.php";
$cls = new database();

$link = $cls->GetLinkMySQLI();

ini_set('session.cookie_domain', '.ebs-systems.epizy.com');
// Configurando cookie como seguro (apenas em conexões HTTPS)
ini_set('session.cookie_secure', 1);
// Configurando o caminho do cookie para ser acessível em todos os subdomínios
ini_set('session.cookie_path', '/');
session_start();

?>
<header id="header">
  <div style="background-image: linear-gradient(black, green, black);">
    <div class="row" style="max-width: 100%;">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div
          style="display: flex; flex-direction: row; justify-content: center; align-items: center; margin-block: 10px;">
          <img class="img-fluid" src="/images/NewEBSLogo.png"
            style="width: 15%;padding: 5px;border-radius: 100%;border-color: white;background-color: black;border-style: solid;"><a
            href="/" style="color: white; text-decoration: none;">
            <h3 style="color: white;margin-inline-start: 10px;">Encryption's Builder Studio<br>Security Systems</h3>
          </a>
        </div>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>
</header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container"><a class="navbar-brand" href="/">Página Inicial</a><button class="navbar-toggler" type="button"
      data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
      aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="/applications">Aplicações</a></li>
        <li class="nav-item"><a class="nav-link" href="/services">Serviços</a></li>
        <li class="nav-item"><a class="nav-link" href="https://github.com/EBS-Security-Systems/Training" target="_blank"
            rel="noopener noreferrer">Treinamentos</a></li>
        <li class="nav-item"><a class="nav-link" href="https://thiagosousa81.wordpress.com/#contato" target="_blank"
            rel="noopener noreferrer">Contato</a></li>
        <li class="nav-item"><a class="nav-link" href="https://web.ebs-systems.epizy.com/">Área do Cliente</a></li>
        <li class="nav-item"><a class="nav-link" href="https://github.com/EBS-Security-Systems" target="_blank"
            rel="noopener noreferrer">Git-Hub</a></li>
        <li class="nav-item"><a class="nav-link" href="https://thiagosousa81.wordpress.com/" target="_blank"
            rel="noopener noreferrer">Sobre</a></li>
      </ul>
      <?php

      if (isset($_SESSION['ID_USER'])) {
        $query = mysqli_query($link, "SELECT * FROM USER WHERE ID_USER = " . $_SESSION['ID_USER']);
        $User = mysqli_fetch_array($query);
        echo '<span class="badge bg-success">Logado como @' . base64_decode($User['ARROBA_USER']) . '</span>';
      } else {
        echo '<span class="badge bg-danger">Não logado</span>';
      }
      ?>
    </div>
  </div>
</nav>

<script>
  function aceitarCookies() {
    document.cookie = "cookies_aceitos=true; expires=Thu, 01 Jan 2099 00:00:00 UTC;";
    document.getElementById("mensagem-cookies").style.display = "none";
  }

  if (document.cookie.indexOf("cookies_aceitos") === false) {
    var mensagem = document.createElement("div");
    mensagem.innerHTML =
      "Nosso site utiliza cookies para melhorar sua experiência. Ao continuar navegando, você concorda com nossa <a href='/privacity/'>Política de Privacidade</a>.<button class='btn btn-default' onclick='aceitarCookies();'>Aceitar</button>";
    mensagem.id = "mensagem-cookies";
    mensagem.style.position = "fixed";
    mensagem.style.top = "0";
    mensagem.style.left = "0";
    mensagem.style.right = "0";
    mensagem.style.backgroundColor = "#F5F5F5";
    mensagem.style.padding = "10px";
    mensagem.style.borderTop = "1px solid #CCC";
    mensagem.style.textAlign = "center";
    document.body.appendChild(mensagem);
  }
</script>