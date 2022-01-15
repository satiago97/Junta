<head>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="css/paginasContainer-details.css">
      <link rel="stylesheet" href="/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/texto.css">
      <link rel="stylesheet" href="css/details.css">
      <link rel="stylesheet" href="css/popup.css">

    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js'></script>

    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.3.0/mapbox-gl-draw.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.3.0/mapbox-gl-draw.css' type='text/css' />

    <title>Trilhos</title>
    
	<style>
		body { margin:0; padding:0; }
		#map {   width: 50%; margin: 50px auto;width:75%; height: 500px;}
	</style>
    <style>
            .teste{
        background-image: url("/img/back-login.png");
        background-repeat: no-repeat;
        background-size: cover;
        height: 20%;
        }
		.marker {
			background-image: url('./marker.png');
			background-size: cover;
			width: 50px;
			height: 50px;
			border-radius: 50%;
			cursor: pointer;
		}

        #form1 , #a1 {
        display:inline-block;
        /* additional code */
        }

        #file:invalid + #labelImagem {
            color: rgb(2, 0, 0);
        }

        select:invalid {color: grey;}

        textarea {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            font-size: 16px;
            resize: none;
            }
            .TablePos{
                width: 75%;
                display: table;
                margin: 0 auto;
                margin-top: 50px;
            }
            .TituloLista{
                display: table;
                margin: 0 auto;
                margin-top: 50px;
            }

            .containerPopup {
            border: 1px solid rgb(79, 79, 79);
            width: 210px;
            height: 300px;
            background-color: rgb(255, 255, 255);        
            text-align: center; 
            /* This set radius to all 4 corners */  
            border-radius: 10px;
            box-shadow: 0 0 0.25em 0.25em rgba(0, 0, 0, 0.25);            }
	</style>
</head>
<header>
    @include('layouts/header')
</header>

<section id="sectionImprensa" class="topOff teste">
    <div class="container">
        <div class="row">
            <div class="main">
                <h1>Trilhos</h1>
                <img class="classic" src="/img/new/icon.png">
            </div>
        </div>
    </div>
            <!--  the map -->
            <div id='map'></div>
    <script>
              
               mapboxgl.accessToken = 'pk.eyJ1IjoidGlhZ29nb21lcyIsImEiOiJja3hpNWhhMjUwN2JlMndvNWZrbGZqM3hqIn0.PQbe_-AJwnw6BJvlCRj9EA';
               const map = new mapboxgl.Map({
         container: 'map',
         style: 'mapbox://styles/mapbox/streets-v11',
         center: [-8.826360,41.697895],
         zoom: 13
       });
       
            
        var Draw = new MapboxDraw();

        // Map#addControl takes an optional second argument to set the position of the control.
        // If no position is specified the control defaults to `top-right`. See the docs
        // for more details: https://docs.mapbox.com/mapbox-gl-js/api/#map#addcontrol

        map.addControl(Draw, 'top-left');


       //pontos trilhos
        var pTrilhos = <?php echo json_encode($pontosTrilho) ?>;
        //trilhos
        var saved_markers = <?php echo json_encode($trilho) ?>;

               if(saved_markers != null){

                //linhas
                var str = saved_markers[0].linha;
                array = JSON.parse("[" + str + "]");
               var chunked = [];
               for (var i = 0;  i < array.length; i += 2) {
                chunked.push(array.slice(i, i + 2))
                }


                //pontos
                var chunked1 = [];
                for(var i =0 ; i < pTrilhos.length  ;i++){
                    var str = pTrilhos[i].coordenadas;
                    array = JSON.parse("[" + str + "]");
                    chunked1.push(array);
                }
                console.log(chunked1);


       map.on('load', () => {
            map.addSource('route', {
            'type': 'geojson',
            'data': {
            'type': 'Feature',
            'properties': {},
            'geometry': {
            'type': 'LineString',
            'coordinates': chunked
                        }
                    }
                });
                map.addLayer({
                'id': 'route',
                'type': 'line',
                'source': 'route',
                'layout': {
                'line-join': 'round',
                'line-cap': 'round'
                },
                'paint': {
                'line-color': '#888',
                'line-width': 8
                }
                });

                // Adicionar pontos
                for(var i = 0; i < chunked1.length; i++) {
                    var obj = chunked1[i];
                    console.log(pTrilhos[i]);
                    var imageurl = '{{ URL::asset('/storage/pontos_trilhos/') }}';
                    var image = imageurl +"/"+ pTrilhos[i].imagem
                    let myLatlng = new mapboxgl.LngLat(obj[0], obj[1]);
                    let marker = new mapboxgl.Marker()
                    .setLngLat(myLatlng)
                    .setPopup(new mapboxgl.Popup({ offset: 25 })
                    //.setHTML( '<div class="containerPopup"><h2>"Titulo popup"</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><img src="https://images.unsplash.com/photo-1523978591478-c753949ff840?w=900" alt="Imagem ponto do trilho" width: auto;" height="200px"></div>'))
                    .setHTML('<div width="300px"><div class="profile-card text-center"><img class="img-responsive" src="'+image+'"><div class="profile-info"><h2 class="hvr-underline-from-center">Ponto de Interesse<span>'+pTrilhos[i].nome+'</span></h2><div>'+pTrilhos[i].descricao+'</div></div></div>'))
                    .addTo(map);
                }
                
                });
            }

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
       }*/
       
           </script>
       
    <footer>
    @include('layouts/footer')
</footer>
</section>
       
