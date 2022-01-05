<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/paginasContainer.css">
<link rel="stylesheet" href="css/texto.css">
<!-- Include our stylesheet -->
<!--<link href="/css/file-explore.css" rel="stylesheet"/>-->
  <title>Documentos Executivo</title>
</head>

<style>
    .teste{
        background-image: url("/img/back-login.png");
    background-repeat: no-repeat;
    background-size: cover;
    height: 20%;
    }

    #myspecialdiv {
  width: 90%;
  margin: 0 auto;
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



    <div id="myspecialdiv">
        <iframe id="myIframe" height="700px" width="90%" src="/html/file-explore.html"></iframe>
    </div>

	<footer>
		@include('layouts/footer')
	</footer>
    <!-- Include our script files -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="/js/file-explore.js"></script>
</section>
