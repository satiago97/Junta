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
    <link rel="stylesheet" href="/css/table.css">
    <link rel="stylesheet" href="/css/form.css">

    <link rel="stylesheet" href="/css/paginasContainer.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/texto.css">
    <!-- modernizr css -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   
</head>


<body>
<div id="preloader">
        <div class="loader"></div>
    </div>

    <div class="page-container">
    @include('backoffice/sidebar')
    <div class="main-content">

            <div class="header-area">
                <div class="row align-items-center">
              
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        
                    </div>
          
           
                </div>
            </div>
     
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Painel de controlo</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Imprensa</span></li>
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


            <div class="form-style-2">
<div class="form-style-2-heading">Editar dados para a imprensa</div>
@foreach($imprensa as $item)
<form action="{{route('update-inserirImprensa', [$item->id])}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
            @method('PUT')
<label for="field1"><span>Nome<span class="required">*</span></span><input type="text" class="input-field" id="nome" name="nome" value="{{$item->nome}}" /></label>
<label for="field2"><span>Data <span class="required">*</span></span><input type="date" class="input-field" id="data" name="data" value="{{$item->data}}" /></label>

<label><a href="/imprensa/{{$item->pdf}}">{{$item->pdf}}</a></label>
@endforeach
<label><span> </span><input type="submit" value="Submit" /></label>


</form>
</div>




          

        
            
               

        <footer>

        <div id="footer">
        <p>© Copyright 2021. All right reserved.</p>
        </div>
            
        </footer>

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