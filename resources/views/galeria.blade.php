<head>

<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" href="css/paginasContainer.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/texto.css">
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


<section id="sectionGaleria" class="topOff teste">

<div class="container">
    <div class="row">
        <div class="main">
            <h1>Galeria</h1>
            <img class="classic" src="/img/new/icon.png">
        </div>
    </div>
</div>

<section class="hero-section">
  <div class="card-grid">
      @foreach($categoriasGaleria as $item)
   
    <a class="card" href="{{route('open2-Galeria', [$item->id])}}">
      <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557187666-4fd70cf76254?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
      <div class="card__content">
        <p class="card__category">Categoria</p>
        <h3 class="card__heading">{{$item->descricao}}</h3>
      </div>
    </a>
  
    @endforeach
  <div>
</section>







<footer>@include('layouts/footer')</footer>
</section>