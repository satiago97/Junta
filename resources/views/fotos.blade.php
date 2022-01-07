<head>

<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" href="/css/paginasContainer.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/texto.css">
  <title>Galeria</title>
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


<section id="sectionFotos" class="topOff teste">
@foreach($categoriaGaleria as $item)
<div class="container">
    <div class="row"></div>
    <div class="main">
        <h1>{{$item->descricao}}</h1>
        <img class="classic" src="/img/new/icon.png">
    </div>
</div>
@endforeach

<section class="hero-section">
  <div class="card-grid">
      @foreach($galeria as $item)
   
    <a class="card" target="_blank" href="/galeria2/{{$item->imagem}}">
        <div class="card__background" style="background-image: url(/galeria2/{{$item->imagem}})"></div>
      <div class="card__content">
      
        <p class="card__category"></p>
        <h3 class="card__heading">{{$item->nome}}</h3>
      </div>
    </a>
  
    @endforeach
  <div>
</section>



<footer>
    @include('layouts/footer')
</footer>




</section>
