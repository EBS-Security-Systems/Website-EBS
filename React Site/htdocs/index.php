<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>EBS Seurity Systems</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/src/2º ÌCONE EBS-SYSTEM v2.1 -not shadow.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/css/style2.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
    /* Estilos para o rodapé escuro */
.dark-footer {
  background-image: linear-gradient(black, green, black);
  color: white;
  padding: 20px;
}

/* Estilos para o título do rodapé */
.footer-heading {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 10px;
}

/* Estilos para a descrição do rodapé */
.footer-description {
  font-size: 14px;
  margin-bottom: 20px;
}

/* Estilos para as redes sociais no rodapé */
.social-media a {
  color: white;
  margin-right: 10px;
  font-size: 18px;
}

/* Estilos para os links do rodapé */
.footer-links li {
  list-style: none;
  margin-bottom: 10px;
}

.footer-links a {
  color: white;
  text-decoration: none;
}

.footer-links a:hover {
  text-decoration: underline;
}

/* Estilos para as informações de contato no rodapé */
.footer-contact li {
  list-style: none;
  margin-bottom: 10px;
}

.footer-contact a {
  color: white;
  text-decoration: none;
}

/* Estilos para o texto do rodapé */
.footer-text {
  font-size: 12px;
  margin-top: 10px;
}

    </style>
  </head>
  <body>
    <!--A aplicação será mostrada aqui-->
    <header id="header"></header>
    <section id="navbar"></section>    
    <footer id="footer" class="dark-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h3 class="footer-heading">Encryption's Builder Studio<br>Security Systems</h3>
            <p class="footer-description">Trabalhando árduamente pela segurança cibernética.</p>
            <div class="social-media">
              <a href="https://thiagosousa81.wordpress.com/#contato" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://thiagosousa81.wordpress.com/#contato" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://thiagosousa81.wordpress.com/#contato" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
          <div class="col-sm-4">
            <h3 class="footer-heading">Navegação</h3>
            <ul class="footer-links">
              <li><a href="https://ebs-systems.epizy.com/">Home</a></li>
              <li><a href="https://api-ebs-web.epizy.com/login/">Login</a></li>
              <li><a href="https://api-ebs-web.epizy.com/singup/">Criar conta</a></li>
            </ul>
          </div>
          <div class="col-sm-4">
            <h3 class="footer-heading">Contato</h3>
            <ul class="footer-contact">
              <li>E-mail: <a href="mailto:thiagosousa81@gmail.com">thiagosousa81@gmail.com</a></li>
              <li>WhatsApp: <a href="https://wa.me/557588583604" target="_blank" rel="noopener noreferrer">+55 75 8858-3604</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <p class="footer-text text-center">© 2023 EBS Security Systems. Todos os direitos reservados.</p>
            <p class="footer-text text-center">Desenvolvido por Thiago Sousa</p>
          </div>
        </div>
      </div>
    </footer>

    <!--Scripts externos-->
    <script src="https://cdn.jsdelivr.net/npm/react@17.0.2/umd/react.development.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/react-dom@17.0.2/umd/react-dom.development.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-plugin-transform-react-jsx/6.24.1/transform-react-jsx.min.js"></script>

        <!--Meus componentes-->
    <script type="text/babel" src="/src/React.js/header.js" data-plugins="transform-react-jsx"></script>
    <script type="text/babel" src="/src/React.js/navbar.js" data-plugins="transform-react-jsx"></script>
    <!--<script type="text/babel" src="/src/React.js/footer.js" data-plugins="transform-react-jsx"></script>-->
    
    <script type="text/babel" data-plugins="transform-react-jsx">
            
      ReactDOM.render(<Header />, document.getElementById('header'));
      
      ReactDOM.render(<NavBar />, document.getElementById('navbar'));
      
      //ReactDOM.render(<Footer />, document.getElementById('footer'));
      
      
    </script>
  </body>
</html>
