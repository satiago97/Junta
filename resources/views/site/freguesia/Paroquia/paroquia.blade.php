<head>

<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" href="css/paginasContainer.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/texto.css">
  <link rel="stylesheet" href="css/details-paroquia.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



  <title>Paróquia</title>
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


body { margin:0; padding:0; }
		#map {   width: 50%; margin: 50px auto;width:75%; height: 75%}

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

<header>
    @include('layouts/header')
</header>

<section id="sectionImprensa" class="topOff teste">
    <div class="container">
        <div class="row">
            <div class="main">
                <h1>Paróquia</h1>
                <img class="classic" src="/img/new/icon.png">
            </div>
        </div>
    </div>

  <!-- aqui-->

    <div id='map'></div>


    <script>
        // {{--var saved_markers = <?php echo json_encode($ondeDormir) ?>;--}}

		mapboxgl.accessToken = 'pk.eyJ1IjoidGlhZ29nb21lcyIsImEiOiJja3hxaWk1OWMxMnRwMnZvZThrcXhsc3hsIn0.vaNy1s8-70xdodel6VAnMw';
        const map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v11',
  center: [-8.826360,41.697895],
  zoom: 5
});


/*
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
*/
    </script>

    <footer>
    @include('layouts/footer')
</footer>
</section>

