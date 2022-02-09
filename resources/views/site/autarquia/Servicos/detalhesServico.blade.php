<head>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
      <link rel="stylesheet" href="/css/paginasContainer-details.css">
      <link rel="stylesheet" href="/css/font-awesome.min.css">
      <link rel="stylesheet" href="/css/texto.css">
      <link rel="stylesheet" href="/css/details.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

      <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
      <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
      <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js'></script>
    
      <title>Serviços</title>
    </head>
    
    <style>
        .teste{
            background-image: url("/img/back-login.png");
        background-repeat: no-repeat;
        background-size: cover;
        height: 20%;
        }  
    </style>
    
    <header>
        @include('layouts/header')
    </header>
    
    <section id="sectionImprensa" class="topOff teste">
        <div class="container">
            <div class="row">
                <div class="main">
                    <h1>Detalhes</h1>
                    <img class="classic" src="/img/new/icon.png">
                </div>
            </div>
        </div>


<div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{asset('storage/Servicos/'.$servico->foto)}}" alt="Admin" width="350" height="350">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Titulo</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{$servico->titulo}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Descrição</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$servico->descricao}}
                    </div>
                  </div>
                  <hr>
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
    