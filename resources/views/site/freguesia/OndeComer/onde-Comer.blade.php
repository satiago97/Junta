<head>
<link rel="stylesheet" href="css/paginasContainer.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/texto.css">
  <link rel="stylesheet" href="css/buttons.css">
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

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

<section id="sectionOndeComer" class="topOff teste">

    <div class="container">
        <div class="row">
            <div class="main">
                <h1>Onde comer</h1>
                <img class="classic" src="/img/new/icon.png">
            </div>
                   </div>
    </div>


    <section class="hero-section">
      <div class="card-grid">
      @foreach ($ondeComer as $item)
        <a class="card" href="{{route('detalhesOndeComer',[$item->id])}}">
          <div class="card__background" style="background-image: url(/ondeComer/{{$item->imagem}})"></div>
          <div class="card__content">
            <!--<p class="card__category">{{$item->nome}}</p>-->
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

