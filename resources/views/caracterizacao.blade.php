<head>

<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" href="css/paginasContainer.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/texto.css">
  <title>Caracterização</title>
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


<section id="sectionHeraldica" class="topOff teste">
@foreach($caracterizacao as $item)
<div class="container">
    <div class="row">
        <div class="main">
            <h1>{{$item-> titulo}}</h1>
            <img class="classic" src="/img/new/icon.png">
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="mainText">
            <h6>{{$item->descricao}}</h6>
        </div>
    </div>
</div>
@endforeach
<footer>@include('layouts/footer')</footer>
</section>
