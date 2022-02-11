@extends('layouts/site')

@section('content-page')
		<!-- Section0 Area Start -->
        <section id="section0" class="slider-area"> 
            <div class="main-slider owl-theme owl-carousel"> 
                <!-- Start Slingle Slide -->

                @foreach ($slider as $item)
 
                <div class="single-slide item" style="background-image: url({{asset('/storage/Slider/'.$item->imagem)}})">

                    <!-- <img src="img/slider/bakery.jpg"> -->
                    <!-- Start Slider Content -->
                        <div class="slider-content-area">   
                                <div class="row">
                                        <div class="slide-content-wrapper text-center">
                                            <div class="slide-content">
                                                <h2>{{$item->titulo}}</h2>
                                                <h3>{{$item->subtitulo}}</h3>
                                                <p>{{$item->descricao}}</p>
                                                <a class="default-btn" href="{{$item->link}}">{{$item->textobotao}}</a>
                                                <img class="classic" src="/img/new/icon.png">

                                            </div>
                                    </div>
                            </div>
                  </div>
                </div>       
                  @endforeach
               
             </div>
        </section>

		<!-- Section0 Area End -->
        <!-- Section1 Start -->
        <section id="section1" class="topOff">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body colorfullPanelFacebook text-center" onclick="location.href='https:\\www.facebook.com/ftkode/';">
                                <a href="/" class="icon">
                                    <i class="fa fa-facebook-f" style="color: white;"></i>
                                </a>
                                
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default colorfullParent">
                            <div class="panel-body colorfullPanelTwitter text-center" href="\">
                                <a href="/" class="icon">
                                    <i class="fa fa-twitter" style="color: white;"> </i>
                                </a>
                               
                                    </div>
                          </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body colorfullPanelInstagram text-center" onclick="location.href='https:\\www.facebook.com/ftkode/';">
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
                    @foreach ($docs as $item)
                     @foreach ($dets as $item1)
                         @if ($item->id == $item1->id_documento_executivo)
                         <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 minHeightProp">
                                    <img class="imgback" src="/img/shape/documento.png">
                                </div>
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <span>{{$item1->titulo}}</span>
                                                                       
                                        </div> 
                                </div> 
                            </div>
                        </div>
                         @endif
                     @endforeach
                    @endforeach
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
        

    
   
        <div class="container">
            <div class="banner">
                <div class="content text-center">
                    <img class="classic" src="/img/new/icon.png">
                <h2>Agenda de Eventos</h2>
                </div></div></div>
                <div style="width:100%; height: 1300px">
                <iframe src="{{url('calendar')}}" style="display: table;margin: 0 auto;width: 100vw; height:1300px;"></iframe>
                </div>
      
        <div class="container">
            <div class="banner">
                <div class="content text-center">
                    <img class="classic" src="/img/new/icon.png">
                <h2>Informações Uteis</h2>
                </div></div></div>

        <div class="container" style="height: 520px;">
        <div class="row">
            <div class="col-sm-3">
                <a class="weatherwidget-io" href="https://forecast7.com/pt/41d69n8d83/viana-do-castelo/" data-label_1="VIANA DO CASTELO" data-label_2="Metereologia" data-theme="original">VIANA DO CASTELO Metereologia</a>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
            </div>
            <div class="col-sm-3">
                <iframe src="//farmaciasdeservico.net/widget/?localidade=braga%7Cbraga&cor_fundo=%23c0c0c0&cor_titulo=%23000000&cor_texto=%23333333&margem=16&v=1" width="300" height="520" frameborder="0" target="_top"></iframe>    
            </div>
            <div class="col-sm-5" style="margin-left: 20px">
                <ul class="list-group">
                    <li class="list-group-item">Contactos Uteis</li>
                    @foreach ($contactos as $cnt)
                    <li class="list-group-item">{{$cnt->titulo}} + + {{$cnt->contacto}}</li>
                    @endforeach
                  </ul>
            </div>
            </div>
        </div>
     
       
  @endsection