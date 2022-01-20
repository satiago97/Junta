<head>
    <link rel="stylesheet" href="css/paginasContainer.css">
      <link rel="stylesheet" href="/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/texto.css">
      <link rel="stylesheet" href="css/buttons.css">
      
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    
      <title>Empresas</title>
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
                <h1>Empresas</h1>
                <img class="classic" src="/img/new/icon.png">
            </div>
                   </div>
    </div>

    
    <section class="hero-section">
        <div class="card-grid">
        @foreach ($empresa as $item)
          <a class="card" href="{{route('detalhesEmpresa',[$item->id])}}">
            <div class="card__background" style="background-image: url(/ondeComer/Empresas/{{$item->foto}})"></div>
            <div class="card__content">
              <p class="card__category">{{$item->nome}}</p>
              @foreach ($empresaCategoria as $cat)
                  @if ($cat->id == $item->categoria)
                  <h3 class="card__heading">{{$cat->descricao}}</h3>
                  @endif
              @endforeach
            </div>
          </a>
          @endforeach
        <div>
      </section>
      <footer>
      @include('layouts/footer')
  </footer>
  </section>
  
  