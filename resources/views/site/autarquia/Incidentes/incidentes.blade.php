<head>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="css/paginasContainer-details.css">
      <link rel="stylesheet" href="/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/texto.css">
      <link rel="stylesheet" href="css/registar.css">
      <link rel="stylesheet" href="css/buttons.css">
      <link rel="stylesheet" href="css/incidentes.css">
      <link rel="stylesheet" href="css/popup.css">
      <link rel="stylesheet" href="css/counter.css">


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="js/counter.js"></script>

      <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
      <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
      <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js'></script>
    
      <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.3.0/mapbox-gl-draw.js'></script>
      <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.3.0/mapbox-gl-draw.css' type='text/css' />
    
      <title>Incidentes</title>
    
      <style>
        body { margin:0; padding:0; }
        #map {width:100%; height: 500px}
        #mapForm {  width: 50%;width:75%; height: 200px}
    
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
      width: 80%;
      height: 150px;
      padding: 12px 20px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
      background-color: #f8f8f8;
      font-size: 16px;
      resize: none;
    }
    .posButton{
        position: absolute;
        right:    10;
        bottom:   10;
    }
    
    </style>
    
    <header>
        @include('layouts/header')
    </header>
    
    <section id="sectionImprensa" class="topOff teste">
        <div class="container">
            <div class="row">
                <div class="main">
                    <h1>Incidentes</h1>
                    <img class="classic" src="/img/new/icon.png">
                </div>
            </div>
        </div>


<div class="outter">
        <div class="card card-5" align="center">
            <div class="row">
                <form class="form1" action="{{ route('insertIncidente.store') }}" method="post" enctype="multipart/form-data" id="incidenteForm">
                        <!-- Add CSRF Token -->
                        @csrf
                    <div class="form-group">
                        <h1 style="font-size: 35px; font-weight: bold;">Reportar Incidente</h1>
                    </div>
            <div class="col-md-6" style="height: 75%">
                <input class="un" type="text"  id="nome" name="nome" placeholder="Nome">
                <input class="un" type="email" id="email" name="email" placeholder="E-mail">
                <input class="un" type="number" id="contacto"  name="contacto" placeholder="Contacto">
                <select class="un" name="categoria" id="categoria" >
                    <option value="" disabled selected hidden>Tipo de Incidente</option>
                    @foreach($tipoIncidente as $categoria )
                      <option  class="un" value="{{ $categoria->id }}">{{ $categoria->descricao }}</option>
                    @endforeach
                  </select>
                  <select class="un" name="tipo_situacao" id="categoria" >
                    <option value="" disabled selected hidden>Tipo de situação</option>
                    @foreach($tipoSituacao as $cat )
                      <option  class="un" value="{{ $cat->id }}">{{ $cat->descricao }}</option>
                    @endforeach
                  </select>
                <textarea class="TextArea" name="mensagem" id="mensagem" form="incidenteForm" placeholder="Insira uma descrição do incidente"></textarea>
            </div>
            <div class="col-md-6" style="height: 75%">
                  <input class="un" type="text"  id="morada" name="morada" placeholder="Morada">
                  <input class="un" type="text" id="pontos" name="pontos" placeholder="Coordenadas">
                  <div id="fileIncidentes" align="center">
                    <input type="file" id="file" class="file" name="file" required>
                            <label for="file" id="labelImagem">Selecionar Imagem</label>
                    </div>
                   <div style="margin-top: 50px"> 
                  <label for = "mapForm" class="labelMap">Selecione a localização</label>
                  <div id="mapForm"></div>
                   </div>            
              </div>
              
                    <span style="margin-left: 50px;">{!! captcha_img() !!}</span>
                    <input class="un" id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
               
              <button style="cursor:pointer;" type="submit" class="button-62 posButton">Registar Incidente</button>
                </form>
            </div>
        </div>   
</div>


<!-- Div counter-->
        <div class="container" style="margin-top: 100px">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="counter blue">
                        <div class="counter-content">
                            <span class="counter-value">{{$count}}</span>
                            <h3>Todos</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter red">
                        <div class="counter-content">
                            <span class="counter-value">{{$count1}}</span>
                            <h3>Por Tratar</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter orange">
                        <div class="counter-content">
                            <span class="counter-value">{{$count2}}</span>
                            <h3>Em Analise</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter green">
                        <div class="counter-content">
                            <span class="counter-value">{{$count3}}</span>
                            <h3>Concluido</h3>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Div Mapa -->    
                <div id='map'></div>
        </div>




    <script>
        var saved_markers = <?php echo json_encode($incidente) ?>;

		mapboxgl.accessToken = 'pk.eyJ1IjoidGlhZ29nb21lcyIsImEiOiJja3hpNWhhMjUwN2JlMndvNWZrbGZqM3hqIn0.PQbe_-AJwnw6BJvlCRj9EA';
        const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-8.826360,41.697895],
        zoom: 10
        });

        // MAP Form
        mapboxgl.accessToken = 'pk.eyJ1IjoidGlhZ29nb21lcyIsImEiOiJja3hpNWhhMjUwN2JlMndvNWZrbGZqM3hqIn0.PQbe_-AJwnw6BJvlCRj9EA';
        const mapForm = new mapboxgl.Map({
        container: 'mapForm',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-8.826360,41.697895],
        zoom: 13
        });

        var Draw = new MapboxDraw();

        // Map#addControl takes an optional second argument to set the position of the control.
        // If no position is specified the control defaults to `top-right`. See the docs
        // for more details: https://docs.mapbox.com/mapbox-gl-js/api/#map#addcontrol

        mapForm.addControl(Draw, 'top-left');

        mapForm.on('click', function (e) {
                    console.log("click on map");
                    var coor = Draw.getAll();
                    var coors = coor.features[0].geometry.coordinates;
                    document.getElementById('pontos').value = coors;
                });

                         //pontos
                var chunked1 = [];
                for(var i =0 ; i < saved_markers.length  ;i++){
                    var str = saved_markers[i].ponto;
                    array = JSON.parse("[" + str + "]");
                    chunked1.push(array);
                }


              // Adicionar pontos
              for(var i = 0; i < chunked1.length; i++) {
                    var obj = chunked1[i];
                    var imageurl = '{{ URL::asset('/storage/incidentes/') }}';
                    var color;
                    var image = imageurl +"/"+ saved_markers[i].imagem
                    let myLatlng = new mapboxgl.LngLat(obj[0], obj[1]);
                    if(saved_markers[i].estado == "Por tratar"){
                        color = "#e62929";   
                        let marker = new mapboxgl.Marker({ "color": "#e62929" })
                        .setLngLat(myLatlng)
                        .setPopup(new mapboxgl.Popup({ offset: 25 })
                        //.setHTML( '<div class="containerPopup"><h2>"Titulo popup"</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><img src="https://images.unsplash.com/photo-1523978591478-c753949ff840?w=900" alt="Imagem ponto do trilho" width: auto;" height="200px"></div>'))
                        .setHTML('<div width="300px"><div class="profile-card text-center"><img class="img-responsive" src="'+image+'"><div class="profile-info"><h2 class="hvr-underline-from-center">Mensagem<span>'+saved_markers[i].mensagem+'</span></h2><div>'+saved_markers[i].data+'</div><div style="background-color:'+color+'">'+saved_markers[i].estado+'</div></div></div>'))
                        .addTo(map);
                    }else if(saved_markers[i].estado == "Em Tratamento"){
                        color = "#ed6702";       
                        let marker = new mapboxgl.Marker({ "color": "#ed6702" })
                        .setLngLat(myLatlng)
                        .setPopup(new mapboxgl.Popup({ offset: 25 })
                        //.setHTML( '<div class="containerPopup"><h2>"Titulo popup"</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><img src="https://images.unsplash.com/photo-1523978591478-c753949ff840?w=900" alt="Imagem ponto do trilho" width: auto;" height="200px"></div>'))
                        .setHTML('<div width="300px"><div class="profile-card text-center"><img class="img-responsive" src="'+image+'"><div class="profile-info"><h2 class="hvr-underline-from-center">Mensagem<span>'+saved_markers[i].mensagem+'</span></h2><div>'+saved_markers[i].data+'</div><div style="background-color:'+color+'">'+saved_markers[i].estado+'</div></div></div>'))
                        .addTo(map);
                    }else{
                        color = "#008f35";
                        let marker = new mapboxgl.Marker({ "color": "#008f35" })
                        .setLngLat(myLatlng)
                        .setPopup(new mapboxgl.Popup({ offset: 25 })
                        //.setHTML( '<div class="containerPopup"><h2>"Titulo popup"</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><img src="https://images.unsplash.com/photo-1523978591478-c753949ff840?w=900" alt="Imagem ponto do trilho" width: auto;" height="200px"></div>'))
                        .setHTML('<div width="300px"><div class="profile-card text-center"><img class="img-responsive" src="'+image+'"><div class="profile-info"><h2 class="hvr-underline-from-center">Mensagem<span>'+saved_markers[i].mensagem+'</span></h2><div>'+saved_markers[i].data+'</div><div style="background-color:'+color+'">'+saved_markers[i].estado+'</div></div></div>'))
                        .addTo(map);
                    }
                }

 

    </script>

    <footer>
    @include('layouts/footer')
</footer>
</section>

