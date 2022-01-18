@if( auth()->check() )
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="/css/bootstrap2.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min2.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/metisMenu.css">
    <link rel="stylesheet" href="/css/owl.carousel.min2.css">
    <link rel="stylesheet" href="/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="/css/typography.css">
    <link rel="stylesheet" href="/css/default-css2.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/responsive2.css">

    <link rel="stylesheet" href="/css/paginasContainer.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/texto.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/buttons.css">
    <link rel="stylesheet" href="/css/popup.css">

    <!-- modernizr css -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js'></script>

    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.3.0/mapbox-gl-draw.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.3.0/mapbox-gl-draw.css' type='text/css' />

    <title>Trilhos</title>
    
	<style>
		body { margin:0; padding:0; }
		#map {   width: 50%; margin: 50px auto;width:75%; height: 75%}
	</style>
    <style>
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
	</style>
</head>

<body>
    
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <div class="page-container">
    @include('backoffice/sidebar')
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        
                    </div>
                    <!-- profile info & task notification -->
           
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Painel de controlo</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="{{ route('painel')}}">Home</a></li>
                                <li><a href="{{ route('trilhos')}}">Trilhos</a></li>
                                <li><span>Editar Ponto</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Portal da freguesia</h4>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content-inner">
                 <!--  the map -->
            <div id='map'></div>

                <div class="container" style="margin-top: 20px;">
                    <div class="row">
                        <div class="mainText">
                        <form action="{{ route('update-ponto', [$pontosTrilho->id]) }}" method="post" enctype="multipart/form-data" id="trilhosForm">
            <!-- Add CSRF Token -->
            @csrf
            @method('PUT')
        <div class="form-group">
            <h1>Editar Ponto</h1>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-5">
            <input class="un" type="text" name="nome" id="nome" placeholder="Nome" required>
            <span class="focus-border"></span>
            <div class="file-input" align="center">
                <input type="file" id="file" class="file" name="file" required>
                        <label for="file" id="labelImagem">Selecionar Imagem</label>
            </div>
            </div>
            <div class="col-5">
            <label>Descrição</label>
            <textarea class="TextArea" name="descricao" form="trilhosForm" ></textarea>
            <span class="focus-border"></span>
            <label>Coordenadas</label>
            <textarea class="TextArea" id="pontos" name="pontos" form="trilhosForm" ></textarea>
            <span class="focus-border"></span>
            </div>
            </div>
            <p><br>
    
        </div>
        <button style="cursor:pointer; float: right; border-radius: 10px;"  type="submit" class="btn btn-primary button-76">Adicionar</button>
        </form>
                            
                        </div>
                    </div>
                </div>


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
     
             map.on('click', function (e) {
                         console.log("click on map");
                         var coor = Draw.getAll();
                         var coors = coor.features[0].geometry.coordinates;
                         document.getElementById('pontos').value = coors;
                     });

     
             var saved_markers = <?php echo json_encode($trilho) ?>;
             var pTrilhos = <?php echo json_encode($pontosTrilho) ?>;
         
                    if(saved_markers != null){
     
                     //linhas   
                     var str = saved_markers.linha;
                     array = JSON.parse("[" + str + "]");
                    var chunked = [];
                    for (var i = 0;  i < array.length; i += 2) {
                     chunked.push(array.slice(i, i + 2))
                     }
                     
                     console.log(pTrilhos);
                     //pontos
                     var chunked1 = [];
                     var str = pTrilhos.coordenadas;
                     array = JSON.parse("[" + str + "]");
                     chunked1.push(array);
                    
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
                        var imageurl = '{{ URL::asset('/storage/pontos_trilhos/') }}';
                        var image = imageurl +"/"+ pTrilhos.imagem
                        let myLatlng = new mapboxgl.LngLat(obj[0], obj[1]);
                        let marker = new mapboxgl.Marker()
                        .setLngLat(myLatlng)
                        .setPopup(new mapboxgl.Popup({ offset: 25 })
                        .setHTML('<div width="300px"><div class="profile-card text-center"><img class="img-responsive" src="'+image+'"><div class="profile-info"><h2 class="hvr-underline-from-center">Ponto de Interesse<span>'+pTrilhos.nome+'</span></h2><div>'+pTrilhos.descricao+'</div></div></div>'))
                        .addTo(map)
                        .togglePopup();
                    }

          
                    
            });
     
        }
            
                </script>
            
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2021. All right reserved.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>

   
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min2.js"></script>
    <script src="/js/metisMenu.min.js"></script>
    <script src="/js/jquery.slimscroll.min.js"></script>
    <script src="/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  

    <!-- all pie chart -->
    <script src="/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="/js/plugins.js"></script>
    <script src="/js/scripts.js"></script>
</body>
@else
<script>
    window.location.href='http://127.0.0.1:8000/login';
</script>
@endif