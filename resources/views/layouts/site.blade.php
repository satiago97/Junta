<!doctype html>
<html lang="en">
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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
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
        max-height: 500px;
        height: auto;
        overflow-y: scroll;
    }
        #style-2::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        border-radius: 10px;
        background-color: #F5F5F5;
    }

    #style-2::-webkit-scrollbar
    {
        width: 8px;
        background-color: #F5F5F5;
    }

    #style-2::-webkit-scrollbar-thumb
    {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #5f5f5f54;
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
                                                                <a style="padding-top: 0px;" class="navbar-brand navBrandText text-uppercase font-weight-bold" href="{{ route('welcome') }}"><img src="/img/logo/logo.png" alt="logo" /></a>
                                                            </div>
                                                            <div class="col-md-9 col-sm-9 col-xs-9" style="padding-left: 40px;padding-top: 18px;">
                                                                <a href="{{ route('welcome') }}"class="nav-link text-uppercase font-weight-bold js-scroll-trigger" style="background-color: transparent"; role="button">Portal da Freguesia</a>
                                                            </div>
                                                        </div>


                                                    </div>
                                
                                                </div>

                                            </div>
                                                     
                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right navBar" style="margin-top: revert;">
                                                    <li class="nav-item"><a href="{{ route('welcome') }}" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Página Inicial <span class="sr-only">(current)</span></a></li>
                                                    <!-- Dropdown Freguesia-->
                                                    <li class="HOVER open">
                                                        <a href="#" class="nav-link text-uppercase font-weight-bold js-scroll-trigger" style="background-color: transparent"; data-toggle="dropdown" role="button" aria-expanded="false">Freguesia</a>
                                                            <ul class="dropdown-menu scrollbar" id="style-2" role="menu">
                                                            <li><a href="{{ route('Historia') }}">História</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('Heraldica') }}">Heráldica</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('Galeria') }}">Galeria</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Imprensa</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('redeEscolar')}}">Rede escolar</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('Agenda')}}">Agenda</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('caracterizacao')}}">Caracterização</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('Empresas') }}">Empresas</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('Associacao')}}">Instituições e Associações</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('Jornal')}}">Jornais</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('Local') }}">Locais a Visitar</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('onde-Comer') }}">Onde Comer</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('onde-Dormir') }}">Onde Dormir</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('paroquia') }}">Paróquia</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('Trilhos') }}">Trilhos</a></li>
                                                            </ul>
                                                    </li>
                                                    <!-- End Dropdown Freguesia-->

                                                    <!-- Dropdown Autarquia-->
                                                    <li class="HOVER open">
                                                        <a href="#" class="nav-link text-uppercase font-weight-bold js-scroll-trigger" style="background-color: transparent";>Autarquia</a>
                                                            <ul class="dropdown-menu scrollbar" id="style-2" role="menu">
                                                            <li><a href="{{ route('list-docexec') }}">Documentos Executivo</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('list-docAssembleia') }}">Documentos Assembleia</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Concursos Publicos</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('Incidentes')}}">Incidentes</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Infraestruturas</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('orgaosAutarquia')}}">Orgãos Autarquia</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Notícias</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Qualidade</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Programas e Iniciativas</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('servicos-frontoffice')}}">Serviços</a></li>
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
                                                    <li class="HOVER open">
                                                        <a href="#" class="nav-link text-uppercase font-weight-bold js-scroll-trigger" style="background-color: transparent";>Informações</a>
                                                            <ul class="dropdown-menu scrollbar" id="style-2" role="menu">
                                                            <li><a href="#">Localização</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Contactos da Freguesisa</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('contactosGerais')}}">Contactos Gerais</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{route('faqs')}}">Faqs</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('contact-form')}}">Formulário de contacto</a></li>
                                                            </ul>
                                                    </li>
                                                    <!-- End Dropdown Informações-->
                                                    <!-- Dropdown Orçamento Participativo-->
                                                    <li class="HOVER open">
                                                        <a href="#" class="nav-link text-uppercase font-weight-bold js-scroll-trigger" style="background-color: transparent";>Orçamento Participativo</a>
                                                            <ul class="dropdown-menu scrollbar" id="style-2" role="menu">
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
	

     
        @yield('content-page')


        <!-- Adress Section End -->
        <!-- Footer Start -->
        <hr>
        <footer class="footer-area">
            <div class="container main-footer">
                
                <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget pr-60">
                                <div class="footer-logo pb-25">
                                    <div class="col-md-4 noPadding text-center">
                                        <a class="" href="index.html"><img class="img-responsive" src="/img/logo/logo.png" alt="restorant" /></a>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>Freguesia</h3>
                                <p class="lock"></p>
                                <ul>
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Agenda</p></a>
                                            </div>
                                        </div>
                                    </li>                                    
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Onde dormir</p></a>
                                            </div>
                                        </div>
                                    </li>                                
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Empresas</p></a>
                                            </div>
                                        </div>
                                    </li> 
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>História</p></a>
                                            </div>
                                        </div>
                                    </li>                                     
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Instituições e Associações</p></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Jornais</p></a>
                                            </div>
                                        </div>
                                    </li>  
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Pontos de interesse</p></a>
                                            </div>
                                        </div>
                                    </li>  
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Rede escolar</p></a>
                                            </div>
                                        </div>
                                    </li>  
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Onde comer</p></a>
                                            </div>
                                        </div>
                                    </li>                                 
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>Autarquia</h3>
                                <p class="lock"></p>
                                <ul>
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Aspetos da Responsabilidade Social</p></a>
                                            </div>
                                        </div>
                                    </li>                                    
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Assembleia</p></a>
                                            </div>
                                        </div>
                                    </li>                                
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Avisos</p></a>
                                            </div>
                                        </div>
                                    </li> 
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Executivo</p></a>
                                            </div>
                                        </div>
                                    </li>                                     
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Partes interessadas</p></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Política de Qualidade e Responsabilidade Social</p></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Serviços</p></a>
                                            </div>
                                        </div>
                                    </li>                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>Contactos</h3>
                                <p class="lock"></p>
                                <p><i class="fa fa-map-marker" style="color: #83ac00"></i> Rua do Conhecimento N.545<br>4582-125 Ponte de Lima</p>
                                <br>
                                <p><i class="fa fa-phone" style="color: #83ac00"></i> 910 000 000<br><i class="fa fa-phone" style="color: #83ac00"></i> 258 000 000</p>
                                <br>
                                <p><i class="fa fa-envelope" style="color: #83ac00"></i><a href="geral@autarquia.pt"> geral@autarquia.pt</a></p>
                              
                            </div>
                        </div>
                </div>
            </div>   
       
        </footer>
        <!-- Footer End -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/jquery-easing/jquery.easing.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="js/ajax-mail.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/main.js"></script>
        
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyIMWhs-crjT0yhctbRjfJFq75FlEhSzE&callback=initMap">
        </script>
    </body>
</html>
