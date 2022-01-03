@if( auth()->check() )
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap2.min.css">
    <link rel="stylesheet" href="css/font-awesome.min2.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/metisMenu.css">
    <link rel="stylesheet" href="css/owl.carousel.min2.css">
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/default-css2.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive2.css">

    <link rel="stylesheet" href="css/paginasContainer.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/texto.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">





    
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
                                <li><a href="index.html">Home</a></li>
                                <li><span>Galeria</span></li>
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
            <!-- page title area end -->
            <div class="main-content-inner">

            <div class="container" style="margin-top: 20px;">        
                    <div class="mainText">
                        <div class="containerBottom">
                        <form action="{{ route('imagens.store') }}" method="post" enctype="multipart/form-data">
        <!-- Add CSRF Token -->
        @csrf
    <div class="form-group">
        <h1>Adicionar</h1>
    </div>
    <div class="form-group">
        
        <input class="effect-3" type="text" name="nome" id="nome" placeholder="Insira o nome da imagem" required>
        <span class="focus-border"></span>
      
        <p><br>
        <div class="file-input">
            <input type="file" id="file" class="file" name="file">
                    <label for="file">Selecionar</label>
            </div>

          <div class="select">
          <select class="un" name="categoria" id="categoria" >
            <option value="" disabled selected hidden>Categoria</option>
            @foreach($categoriasGaleria as $item )
              <option value="{{ $item->id }}">{{ $item->descricao }}</option>
            @endforeach
          </select>
          </div>

           

    </div>
    <button style="cursor:pointer; margin-top:20px;" type="submit" class="btn btn-primary">Adicionar</button>

    </form>
    </div>
    </div>
    </div>
    <hr class="rounded">
    <h1 style="text-align: center; margin-top:20px;">Editar</h1>

    @foreach($categoriasGaleria as $item)
    <div class="container">
        <div class="row">
            <div class="mainTextCategorias" style="margin-top: 15px;">
            <a href="{{route('open-editaGaleria', [$item->id])}}" id="a1" class="fill-div"><h3>{{$item->descricao}}</h3></a>
                
            </div>
        </div>
    </div>
    @endforeach

      



        </div>
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
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min2.js"></script>
    <script src="js/metisMenu.min.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  

    <!-- all pie chart -->
    <script src="js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="js/plugins.js"></script>
    <script src="js/scripts.js"></script>

    <script>
        $(document).ready(function() {

$(".box").hover(function() {
  $(".box-right").toggleClass('cl-box2');
  $(".bar").toggleClass('cl-bar2');
});

$(".bar").click(function() {
  alert("Deleted");
});
});
    </script>
</body>
@else
<script>
    window.location.href='http://127.0.0.1:8000/login';
</script>
@endif




