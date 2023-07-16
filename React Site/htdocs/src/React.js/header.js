function Header() {
        return (
          <div style={{backgroundImage: 'linear-gradient(180deg, black, green, black)'}}>
            <div className="row" style={{maxWidth: '100%'}}>
              <div className="col-sm-2"></div>
              <div className="col-sm-8">
                <div style={{display: 'flex', flexDirection: 'row', justifyContent: 'center', alignItems: 'center', marginBlock: '10px'}}>
                  <img className="img-fluid" src="/src/2º%20ÌCONE%20EBS-SYSTEM%20v2.1%20-not%20shadow.webp" style={{width: '15%', padding: '5px'}} />
                  <a href="/" style={{color: 'white', textDecoration: 'none'}}><h3 style={{color: 'white'}}>Encryption's Builder Studio<br />Security Systems</h3></a>
                </div>
              </div>
              <div className="col-sm-2"></div>
            </div>
          </div>
        );
      }
