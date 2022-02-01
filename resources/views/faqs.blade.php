<head>
    
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" href="css/paginasContainer.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/texto.css">
  <link rel="stylesheet" href="css/faqs.css">

  <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
  <script src="/public/js/faqs.js"></script>
  
 
  

  <title>Faqs</title>
<head>


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

<div class="container">
    <div class="row">
        <div class="main">
            <h1>Faqs</h1>
            <img class="classic" src="/img/new/icon.png">
        </div>
    </div>
</div>


<div class="container">
  
    <div class="panel-group" id="accordion">
        
        @foreach($faqs as $item)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$item->id}}">{{$item->titulo}}</a>
                </h4>
            </div>
            <div id="collapse{{$item->id}}" class="panel-collapse collapse">
                <div class="panel-body">
                    <h6 style="line-height: 1.5;">
                    {{$item->texto}}
                    </h6>
                
                </div>
            </div>
        </div>
        @endforeach
       
        
    </div>
</div>

<footer>@include('layouts/footer')</footer>
</section>

