<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Portal da Freguesia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
     
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/responsive.css">
        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <style>
   .HOVER:hover .dropdown-menu {
    visibility: visible;
    opacity: 1;
    }

    .HOVER .dropdown-menu {
        position: absolute;
        list-style: none;
        opacity: 0;
        visibility: hidden;
        padding: 10px;
        -webkit-transition: opacity 600ms, visibility 600ms;
        transition: opacity 600ms, visibility 600ms;
    }
        </style>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header Area Start -->
		<header class="top">
                  <div class="fixedArea">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 noPadding">
                            <div class="content-wrapper one">
                                <!-- Main Menu Start -->
                                <!-- Navbar-->
                                <header class="header">
                                    <nav class="navbar navbar-default myNavBar">
                                        <div class="container">

                                            <!-- Brand and toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                                <div class="row">
                                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                                        <div class="row">
                                                            <div class="col-md-3 col-xs-3 col-sm-3">
                                                                <a style="padding-top: 0px;" class="navbar-brand navBrandText text-uppercase font-weight-bold" href="index.html"><img src="/img/logo/logo.png" alt="logo" /></a>
                                                            </div>
                                                            <div class="col-md-9 col-sm-9 col-xs-9" style="padding-left: 40px;padding-top: 18px;">
                                                                <a href="index.html"class="nav-link text-uppercase font-weight-bold js-scroll-trigger" style="background-color: transparent"; role="button">Portal da Freguesia</a>
                                                            </div>
                                                        </div>


                                                    </div>
                                
                                                </div>

                                            </div>
                                                     
                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right navBar">
                                                    <li class="nav-item"><a href="#section0" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Home <span class="sr-only">(current)</span></a></li>
                                                    <!-- Dropdown Freguesia-->
                                                    <li class="dropdown HOVER open">
                                                        <a href="#" class="nav-link text-uppercase font-weight-bold js-scroll-trigger" style="background-color: transparent"; data-toggle="dropdown" role="button" aria-expanded="false">Freguesia</a>
                                                            <ul class="dropdown-menu" role="menu">
                                                            <li><a href="{{ route('Historia') }}">História</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('Heraldica') }}">Heráldica</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('Galeria') }}">Galeria</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('imprensa')}}">Imprensa</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('redeEscolar')}}">Rede escolar</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('agenda')}}">Agenda</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('caracterizacao')}}">Caracterização</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('empresas')}}">Empresas</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('instituicoesEAssociacoes')}}">Instituições e Associações</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('jornais')}}">Jornais</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('locaisAvisitar')}}">Locais a Visitar</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('onde-Comer') }}">Onde Comer</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('ondeDormir')}}">Onde Dormir</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('paroquia')}}">Paróquia</a></li>
                                                            </ul>
                                                    </li>
                                                    <!-- End Dropdown Freguesia-->

                                                    <!-- Dropdown Autarquia-->
                                                    <li class="dropdown HOVER open">
                                                        <a href="#" class="nav-link text-uppercase font-weight-bold js-scroll-trigger" style="background-color: transparent"; data-toggle="dropdown" role="button" aria-expanded="false">Autarquia</a>
                                                            <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Documentos Executivo</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Documentos Assembleia</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Concursos Publicos</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Incidentes</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Infraestruturas</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Orgãos Autarquia</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Notícias</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Qualidade</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Programas e Iniciativas</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Serviços</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Toponímia</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Covid-19</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">CTT Balcão</a></li>
                                                            </ul>
                                                    </li>
                                                    <!-- End Dropdown Autarquia-->
                                                    <!-- Dropdown Informações-->
                                                    <li class="dropdown HOVER open">
                                                        <a href="#" class="nav-link text-uppercase font-weight-bold js-scroll-trigger" style="background-color: transparent"; data-toggle="dropdown" role="button" aria-expanded="false">Informações</a>
                                                            <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Localização</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Contactos da Freguesisa</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Contactos Gerais</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Faqs</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Formulário de contacto</a></li>
                                                            </ul>
                                                    </li>
                                                    <!-- End Dropdown Informações-->
                                                    <!-- Dropdown Orçamento Participativo-->
                                                    <li class="dropdown HOVER open">
                                                        <a href="#" class="nav-link text-uppercase font-weight-bold js-scroll-trigger" style="background-color: transparent"; data-toggle="dropdown" role="button" aria-expanded="false">Orçamento Participativo</a>
                                                            <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Sobre</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Como Participar</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Propostas</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Edições Anteriores</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Resultados</a></li>
                                                            </ul>
                                                    </li>
                                                    <!-- End Dropdown Orçamento Participativo-->
                                                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Balcão Virtual</a></li>
                                                        
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </header>
                                <!-- Main Menu End -->
                            </div>
						</div>
                  </div>
			</div>
		</header>