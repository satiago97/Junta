@if( auth()->check() )
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/assets/images/icon/favicon.ico">
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


    <!-- modernizr css -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Slider</title>
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
                                <li><a href="{{ route('painel') }}">Home</a></li>
                                <li><a href="{{ route('slider') }}">Slider</a></li>
                                <li><span>Editar Slider</span></li>
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
                <div class="row">
                    <div class="mainText">
<form action="{{ route('update-slide',[$slide->id]) }}" method="post" enctype="multipart/form-data">
        <!-- Add CSRF Token -->
        @csrf
        @method('PUT')
    <div class="form-group">
        <h1>Editar Slide</h1>
    </div>
    <div class="form-group">
        <div class="row">
        <div class="col-5">
        <input class="un" type="text" name="titulo" id="titulo" value="{{ $slide->titulo}}" required>
        <span class="focus-border"></span>
        <input class="un" type="text" name="subtitulo" id="subtitulo" value="{{ $slide->subtitulo}}" required>
        <span class="focus-border"></span>
        <input class="un" type="text" name="textobotao" id="textobotao" value="{{ $slide->textobotao}}" required>
        <span class="focus-border"></span>
        </div>
        <div class="col-5">
        <input class="un" type="text" name="descricao" id="descricao" value="{{ $slide->descricao}}" required>
        <span class="focus-border"></span>
        <input class="un" type="text" name="link" id="link" value="{{ $slide->link}}" required>
        <span class="focus-border"></span>
        <span class="focus-border"></span>
        <div class="file-input" align="center">
            <input type="file" id="file" class="file" name="file">
                    <label for="file" id="labelImagem">Selecionar Imagem</label>
        </div>
        </div>
        </div>
        <p><br>

    </div>
        
        <p><br>
            <button style="cursor:pointer; float: left;" type="submit" class="btn btn-primary button-76">Editar</button>
    </div>
</form>

  
                        
                    </div>
                </div>
            </div>

        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
        <div id="footer">
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

