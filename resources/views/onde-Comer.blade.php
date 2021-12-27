<head>

<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
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
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/buttons.css">
  <title>Onde comer</title>
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
                <h1>Onde comer</h1>
                <img class="classic" src="/img/new/icon.png">
            </div>
                   </div>
    </div>
              <!-- main content area end -->
    <div class="container">
        <div class="row">
            @foreach($ondeComerCategoria as $item)
            <div class="mainContainerImage">
            <div class="parent">
                @foreach ($ondeComer as $item1)
                @if($item1->id == 1)
                <div class="box"><img src="{{asset('galeria/ondeComer/'.$item1->imagem)}}" width="200px" height="300px" alt="Image"/></div>          
                @endif
                @endforeach
            <label>Categoria</label>
            <h6>{{$item -> descricao}} </h6>
            <button class="button-62" role="button">Ver</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
 

    <footer>
    @include('layouts/footer')
</footer>
</section>

