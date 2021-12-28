<head>

<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" href="css/paginasContainer.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/texto.css">
  <link rel="stylesheet" href="css/cards.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">


  <title>Onde dormir</title>
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
                <h1>Onde dormir</h1>
                <img class="classic" src="/img/new/icon.png">
            </div>
        </div>
    </div>


    <section class="hero-section">
        <div class="card-grid">
        @foreach ($ondeDormir as $item)
          <a class="card" href="#">
            <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557177324-56c542165309?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80)"></div>
            <div class="card__content">
              <p class="card__category">{{$item->nome}}</p>
              <h3 class="card__heading">{{$item->descricao}}</h3>
            </div>
          </a>
          @endforeach
        <div>
      </section>

    <footer>
    @include('layouts/footer')
</footer>
</section>

