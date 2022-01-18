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
    
      <title>Onde Dormir</title>
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
                    <img src="{{asset('ondeComer/ondeComer/'.$ondeComer->imagem)}}" alt="Admin" width="350" height="350">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nome</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{$ondeComer->nome}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Descrição</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$ondeComer->descricao}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Contacto</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$ondeComer->contacto}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$ondeComer->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Morada</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$ondeComer->morada}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Latitude</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$ondeComer->lat}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Longitude</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$ondeComer->lng}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Website</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$ondeComer->site}}
                    </div>
                  </div>
                  <hr>
                </div>
              </div>

            </div>
          </div>

        </div>
    </div>

      <!--  the map -->
	<div id='map'></div>


    <script>
        var dados = <?php echo json_encode($ondeComer) ?>;
        var saved_markers = [];
        saved_markers.push(dados);
      
		mapboxgl.accessToken = 'pk.eyJ1IjoidGlhZ29nb21lcyIsImEiOiJja3hxaWk1OWMxMnRwMnZvZThrcXhsc3hsIn0.vaNy1s8-70xdodel6VAnMw';
        const map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v11',
  center: [-8.826360,41.697895],
  zoom: 5
});



var marker;

// After the map style has loaded on the page, add a source layer and default
// styling for a single point.
map.on('load', function () {
    add_markers(saved_markers);

    // Listen for the `result` event from the MapboxGeocoder that is triggered when a user
    // makes a selection and add a symbol that matches the result.
    geocoder.on('result', function (ev) {
        marker.remove();
        console.log(ev.result);
        document.getElementById("lat").value = ev.result.center[1];
        document.getElementById("lng").value = ev.result.center[0];

    });
});

function add_markers(coordinates) {

var geojson = (saved_markers == coordinates ? saved_markers : '');
console.log(geojson);


$.each(geojson, function (i, marker) {
    var v3 = [marker.lng, marker.lat];
    new mapboxgl.Marker()
        .setLngLat(v3)
        .addTo(map);

    new mapboxgl.Popup({
            closeOnClick: true,
            closeButton: true,
        })
        .setLngLat(v3)
        .setHTML('<small>' + marker.nome + '</small>')
        .addTo(map);
});
}

    </script>

    
    <footer>
        @include('layouts/footer')
    </footer>
    </section>
    