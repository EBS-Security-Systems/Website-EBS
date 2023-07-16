function Footer() {
  return (
    <footer className="dark-footer">
      <div className="container">
        <div className="row">
          <div className="col-sm-4">
            <h3 className="footer-heading">Encryption's Builder Studio<br>Security Systems</h3>
            <p className="footer-description">Trabalhando árduamente pela segurança cibernética.</p>
            <div className="social-media">
              <a href="https://thiagosousa81.wordpress.com/#contato" target="_blank" rel="noopener noreferrer">
                <i className="fab fa-twitter"></i>
              </a>
              <a href="https://thiagosousa81.wordpress.com/#contato" target="_blank" rel="noopener noreferrer">
                <i className="fab fa-facebook-f"></i>
              </a>
              <a href="https://thiagosousa81.wordpress.com/#contato" target="_blank" rel="noopener noreferrer">
                <i className="fab fa-instagram"></i>
              </a>
            </div>
          </div>
          <div className="col-sm-4">
            <h3 className="footer-heading">Navegação</h3>
            <ul className="footer-links">
              <li><a href="https://ebs-systems.epizy.com/">Home</a></li>
              <li><a href="https://api-ebs-web.epizy.com/login/">Login</a></li>
              <li><a href="https://api-ebs-web.epizy.com/singup/">Criar conta</a></li>
            </ul>
          </div>
          <div className="col-sm-4">
            <h3 className="footer-heading">Contato</h3>
            <ul className="footer-contact">
              <li>E-mail: <a href="mailto:thiagosousa81@gmail.com">thiagosousa81@gmail.com</a></li>
              <li>WhatsApp: <a href="https://wa.me/557588583604" target="_blank" rel="noopener noreferrer">+55 75 8858-3604</a></li>
            </ul>
          </div>
        </div>
        <div className="row">
          <div className="col-sm-12">
            <p className="footer-text">© 2023 Encryption's Builder Studio. Todos os direitos reservados.</p>
            <p className="footer-text">Desenvolvido por Thiago Sousa</p>
          </div>
        </div>
      </div>
    </footer>
  );
}
