<head>

<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" href="css/paginasContainer.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/texto.css">
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
            @foreach($ondeComer as $item)
            <div class="mainContainerImage">
            <div class="parent">
             <div class="box"><img src="{{asset('galeria/ondeComer/'.$item->imagem)}}" width="200px" height="300px" alt="Image"/></div>
             <label>Nome:</label>
            <h6>{{$item -> nome}}</h6>
            <label>Descricao:</label>
            <h6>{{$item -> descricao}} </h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
 

    <footer>
    @include('layouts/footer')
</footer>
</section>

