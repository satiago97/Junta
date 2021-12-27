<head>
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

<section id="sectionOndeComer" class="topOff teste">
    <div class="container">
        <div class="row">
            <div class="main">
                <h1>Onde comer</h1>
                <img class="classic" src="/img/new/icon.png">
            </div>
                   </div>
    </div>

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

