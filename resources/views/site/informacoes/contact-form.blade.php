<head>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="css/paginasContainer-details.css">
      <link rel="stylesheet" href="/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/texto.css">
      <link rel="stylesheet" href="css/contact-form.css">
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
      <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
      <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js'></script>
    
      <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.3.0/mapbox-gl-draw.js'></script>
      <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.3.0/mapbox-gl-draw.css' type='text/css' />
    
      <title>Formulário de Contacto</title>
    
      <style>
        body { margin:0; padding:0; }
        #map {   width: 50%; margin: 50px auto;width:75%; height: 500px}
    
        .marker {
          background-image: url('./marker.png');
          background-size: cover;
          width: 50px;
          height: 50px;
          border-radius: 50%;
          cursor: pointer;
        }
    
            .titulo { 
        display: block;
        font-size: 2em;
        margin-top: 0.67em;
        margin-bottom: 0.67em;
        margin-left: 0;
        margin-right: 0;
        font-weight: bold;
        }
    </style>
    
    </head>
    
    <style>
        .teste{
            background-image: url("/img/back-login.png");
        background-repeat: no-repeat;
        background-size: cover;
        height: 20%;
        }
        .textarea {
      width: 100%;
      height: 150px;
      padding: 12px 20px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
      background-color: #f8f8f8;
      font-size: 16px;
      resize: none;
    }
    
    </style>
    
    <header>
        @include('layouts/header')
    </header>
    
    <section id="sectionImprensa" class="topOff teste">
        <div class="container">
            <div class="row">
                <div class="main">
                    <h1>Formulário de Contacto</h1>
                    <img class="classic" src="/img/new/icon.png">
                </div>
            </div>
        </div>
    
        <div class="background">
            <div class="container">
              <div class="screen">
                <div class="screen-header">
                  <div class="screen-header-left">
                    <div class="screen-header-button close"></div>
                    <div class="screen-header-button maximize"></div>
                    <div class="screen-header-button minimize"></div>
                  </div>
                  <div class="screen-header-right">
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                  </div>
                </div>
                <div class="screen-body">
                  <div class="screen-body-item left">
                    <div class="app-title">
                      <span>CONTACT</span>
                      <span>US</span>
                    </div>
                    <div class="app-contact">CONTACTo: 258 000 000</div>
                  </div>
                  <div class="screen-body-item">
                    <div class="app-form">
                      <div class="app-form-group">
                        <input class="app-form-control" placeholder="NOME">
                      </div>
                      <div class="app-form-group">
                        <input class="app-form-control" placeholder="EMAIL">
                      </div>
                      <div class="app-form-group">
                        <input class="app-form-control" placeholder="CONTACTO">
                      </div>
                      <div class="app-form-group message">
                        <input class="app-form-control" placeholder="MENSSAGEM">
                      </div>
                      <div class="app-form-group buttons">
                        <button class="app-form-button">CANCEL</button>
                        <button class="app-form-button">SEND</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
     
    
        <footer>
        @include('layouts/footer')
    </footer>
    </section>
    
    