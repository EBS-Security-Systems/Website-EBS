<?php
      echo 'function NavBar() {
        return (
          <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
            <div className="container">
              <a className="navbar-brand" href="/">Página Inicial</a>
              <button
                className="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span className="navbar-toggler-icon"></span>
              </button>
              <div className="collapse navbar-collapse" id="navbarNav">
                <ul className="navbar-nav">
                  <li className="nav-item">
                    <a className="nav-link" href="/applications">Aplicações</a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="/services.html">Serviços</a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="https://github.com/EBS-Security-Systems/Training" target="_blank" rel="noopener noreferrer">Treinamentos</a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="https://thiagosousa81.wordpress.com/#contato" target="_blank" rel="noopener noreferrer">Contato</a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="https://api-ebs-web.epizy.com/">Área do Cliente</a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="https://github.com/EBS-Security-Systems" target="_blank" rel="noopener noreferrer">Git-Hub</a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="https://thiagosousa81.wordpress.com/" target="_blank" rel="noopener noreferrer">Sobre o desenvolvedor</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        );
      }';?>