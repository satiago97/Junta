@extends('layouts/site')

@section('content-page')
		<!-- Section0 Area Start -->
        <section id="section0" class="slider-area"> 
            <div class="main-slider owl-theme owl-carousel"> 
                <!-- Start Slingle Slide -->
                <div class="single-slide item" style="background-image: url(/img/appGesautarquia.png)">


                    <!-- <img src="img/slider/placehold.png"> -->

                    <!-- Start Slider Content -->

                        <div class="slider-content-area">  
                                <div class="row">
                                        <div class="slide-content-wrapper text-center">
                                            <div class="slide-content">
                                                <h2>App GESautarquia</h2>
                                                <h3>A autarquia na palma da sua mão</h3>
                                                <p>Reporte incidentes e sugestões<br>Aproxima a população da autarquia</p>

                                                <a class="default-btn" href="https://play.google.com/store/apps/details?id=com.gesautarquia">Descarregue já</a>
                                                <img class="classic" src="/img/new/icon.png">

                                            </div>
                                        </div>
                                    </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>
                <!-- End Single Slide -->
                <!-- Start Slingle Slide -->
                <div class="single-slide item" style="background-image: url(/img/slider1.jpg)">

                    <!-- <img src="img/slider/bakery.jpg"> -->
                    <!-- Start Slider Content -->

                        <div class="slider-content-area">   
                                <div class="row">
                                        <div class="slide-content-wrapper text-center">
                                            <div class="slide-content">
                                                <h2>Balcão Virtual</h2>
                                                <h3>Área do cidadão</h3>
                                                <p>Já experimentou solicitar ou renovar licenças dos canídeos <br> pelo Balcão Virtual da Freguesia? É simples!</p>
                                                <a class="default-btn" href="{{ route('registar') }}">Registe-se e aceda aqui!</a>
                                                <img class="classic" src="/img/new/icon.png">

                                            </div>
                                    </div>
                            </div>
                  </div>
                    <!-- Start Slider Content -->
                </div>	
                
                <div class="single-slide item" style="background-image: url(img/slider/1900x1000.png)">

                    <!--<img src="img/slider/bakery.jpg">-->
                    <!-- Start Slider Content -->

                        <div class="slider-content-area">   
                                <div class="row">
                                        <div class="slide-content-wrapper text-center">
                                            <div class="slide-content">
                                                <img class="classic" src="/img/logo/logo.png">

                                                <h3>BAKERY MAKES </h3>
                                                <h2>A Taste Of  The Good Life</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis leo vitae lacinia congue.</p>
                                                <a class="default-btn" href="about.html">Learn more</a>
                                                <img class="classic" src="/img/new/icon.png">

                                            </div>
                                    </div>
                            </div>
                        </div>
                    <!-- Start Slider Content -->
                </div>
             </div>
        </section>

		<!-- Section0 Area End -->
        <!-- Section1 Start -->
        <section id="section1" class="topOff">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body colorfullPanelFacebook text-center">
                                <a href="/" class="icon">
                                    <i class="fa fa-facebook-f" style="color: white;"></i>
                                </a>
                                
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default colorfullParent">
                            <div class="panel-body colorfullPanelTwitter text-center">
                                <a href="/" class="icon">
                                    <i class="fa fa-twitter" style="color: white;"> </i>
                                </a>
                               
                                    </div>
                          </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body colorfullPanelInstagram text-center">
                                <a href="/" class="icon">
                                    <i class="fa fa-instagram" style="color: white;"> </i>
                                </a>   
                                    </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section1 End -->
        <!-- Section2 Start -->
        <section id="section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                        <div class="maintext text-center">

                            <img class="classic" src="/img/new/icon.png">
                            
                            <h2>Avisos e Editais</h2>
                                                    
                            </div>  
                    </div>
                </div>
                <div class="row shapes">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 minHeightProp">
                                <img class="imgback" src="/img/shape/documento.png">
                            </div>
                            <div class="col-md-12">
                                <div class="text-center">
                                    <span>Edital Nº105 - Comemoração dos Santos</span>
                                                                   
                                    </div> 
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 minHeightProp">
                                <img class="imgback" src="/img/shape/documento.png">
                            </div>
                            <div class="col-md-12">
                                <div class="text-center">
                                    <span>Edital Nº104 - Fecho da estrada</span>
                                    
                                </div> 
                            </div> 
                        </div> 
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 minHeightProp">
                                <img class="imgback" src="/img/shape/documento.png">
                            </div>
                            <div class="col-md-12">
                                <div class="text-center">
                                    <span>Aviso Nº503 - Vacinação canina</span>
                                    
                                </div> 
                            </div> 
                        </div>  
                    </div>
                </div>
            </div>
        </section>

        <section id="section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                        <div class="maintext text-center">

                            <img class="classic" src="/img/new/icon.png">
                            
                            <h2>Últimas notícias</h2>
                                                    
                            </div>  
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                            <div class="col-md-12 noPadding">
                                <div id="news-slider" class="news-slider owl-theme owl-carousel">
                                    <div class="post-slide">
                                        <div class="post-img">
                                            <div class="post-abs"><p>Turismo rural é a grande aposta do executivo</p></div>
                                            <img src="/img/new/rural.jpg" alt="">
                                        </div>
                                        <h3 class="post-title"><a href="#">Turismo rural é a grande aposta do executivo</a></h3>
                                        <div class="post-details">
                                            <p style="font-size: 15px;">
                                                A Junta de Freguesia está a proceder a trabalhos de limpeza no Caminho Velho dos Moinhos.  
                                            </p>
                                        </div>
                                       
                                    </div>
                     
                                    <div class="post-slide">
                                        <div class="post-img">
                                            <div class="post-abs"><p>Limpeza do caminho velho dos moinhos</p></div>
                                            <img src="/img/new/limpeza.jpg" alt="">
    
                                        </div>
                                        <h3 class="post-title"><a href="#">Limpeza do caminho velho dos moinhos</a></h3>
                                       
                                    </div>
                                    
                                    <div class="post-slide">
                                        <div class="post-img">
                                            <div class="post-abs"><p>Jardim botanico vence prémio nacional</p></div>
                                            <img src="/img/new/jardim botanico.jpg" alt="">
    
                                        </div>
                                        <h3 class="post-title"><a href="#">Jardim botanico vence prémio nacional</a></h3>
                                       
                                    </div>
                                    
                                    <div class="post-slide">
                                        <div class="post-img">
                                            <div class="post-abs"><p>Reparação das ruas do centro</p></div>
                                            <img src="/img/new/reparacao.jpg" alt="">
    
                                        </div>
                                        <h3 class="post-title"><a href="#">Reparação das ruas do centro</a></h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>
        </section>
        

        <section id="section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                        <div class="maintext text-center">

                            <img class="classic" src="/img/new/icon.png">
                            
                            <h2>Agenda de eventos</h2>
                            <iframe src="https://calendar.google.com/calendar/embed?src=osaefixe%40gmail.com&ctz=Europe%2FLondon"  style="border: 0" width="600" height="300" frameborder="0" scrolling="no" ></iframe>
                            </div> 
                            
                    </div>
                </div>
               
            </div>
        </section>
   

        <div class="container">
            <div class="banner">
                <div class="content text-center">
                <h2>Meteorologia</h2>
                </div>
            </div>
        </div>
     
       
  @endsection