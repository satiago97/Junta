<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="css/file-explore.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" href="css/paginasContainer.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/texto.css">
  <title>Documentos Executivo</title>
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
                <h1>Documentos Executivo</h1>
                <img class="classic" src="/img/new/icon.png">
            </div>
        </div>
    </div>
<body>


<div class="container">
  <h1>Explorar Documentos</h1>
  <ul class="file-tree">
      @foreach ($documentoExecCategoria as $item)
      <li><a href="#" value="{{$item->id}}">{{$item->descricao}}</a>
        <ul>
            @foreach ($documentosExecutivo as $item2)
            @if ($item2->categoria_documento_executivo == $item->id)
            <?php
            $ano=$item2->data;
            ?>
            <li> <a href="#">{{$ano->year}}</a>
                <ul>
                    @foreach ($detalhesDocumentosExecutivo as $det)
                    @if ($item2->id == $det->id_documento_executivo)
                    <li> <a href="{{$det->documento}}">{{$det->titulo}}</a> </li>
                    @endif
                    @endforeach
                </ul>
            </li>
            @endif
            @endforeach
        </ul>
      </li>
      @endforeach
  </ul>
</div>

<footer>
    @include('layouts/footer')
</footer>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> 
<script src="js/file-explore.js"></script> 
<script>
$(document).ready(function() {
            $(".file-tree").filetree();
	        });
</script>
</body>

</section>
</html>
