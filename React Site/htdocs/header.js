import React from 'react';

function Header() {
  return (
    <header>
      <nav className="navbar navbar-expand-lg navbar-light bg-light">
        <div className="container">
          <a className="navbar-brand" href="/">Encryption's Builder Studio</a>
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
                <a className="nav-link" href="/">Home</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" href="/applications">Applications</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" href="/services">Services</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" href="https://github.com/EBS-Security-Systems/Training" target="_blank" rel="noopener noreferrer">Training</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" href="https://thiagosousa81.wordpress.com/#contato" target="_blank" rel="noopener noreferrer">Contact</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" href="https://api-ebs-web.epizy.com/">Client Area</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" href="https://github.com/EBS-Security-Systems" target="_blank" rel="noopener noreferrer">GitHub</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" href="https://thiagosousa81.wordpress.com/" target="_blank" rel="noopener noreferrer">About the Developer</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  );
}

export default Header;
