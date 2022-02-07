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
    
      <title>Agenda</title>
    </head>
    
    <style>
        .teste{
            background-image: url("/img/back-login.png");
        background-repeat: no-repeat;
        background-size: cover;
        height: 20%;
        }
   

		body { margin:0; padding:0; }
		#map {   width: 50%; margin: 50px auto;width:75%; height: 500px;}

		.marker {
			background-image: url('./marker.png');
			background-size: cover;
			width: 50px;
			height: 50px;
			border-radius: 50%;
			cursor: pointer;
		}

        .mainText h3{
            letter-spacing: 0.3px;
            line-height: 1.3rem;
        }

    
    </style>
    
    <header>
        @include('layouts/header')
    </header>
    
    <section id="sectionImprensa" class="topOff teste">
        <div class="container">
            <div class="row">
                <div class="main">
                    <h1>Agenda</h1>
                    <img class="classic" src="/img/new/icon.png">
                </div>
            </div>
        </div>

@foreach($agenda as $item)
<div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="" alt="Admin" width="350" height="350">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Título</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{$item->titulo}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Data do início</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$item->data_inicio}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Data do fim:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$item->data_fim}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Hora</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $item->hora->format('H:i:s') }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Link</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <a href="{{$item->link}}">
                        {{$item->link}}
                        </a>
                    </div>
                  </div>
                 
                </div>
              </div>

            </div>
          </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="mainText">
            <h3>
        {{$item->descricao}}
    </h3>
            </div>
        </div>
    </div>

    



   
    
    <footer>
        @include('layouts/footer')
    </footer>
    </section>
    @endforeach