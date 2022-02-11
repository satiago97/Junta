<div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><h2>Portal da freguesia</h2></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            @if( auth()->check() )
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold" href="#">Hi {{ auth()->user()->name }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/logout">Log Out</a>
                                </li>
                            @endif

                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-tachometer"></i><span>Painel de controlo</span></a>
                               
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-home"></i><span>Freguesia
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="{{route('inserirCaracterizacao')}}">Caracterização</a></li>
                                    <li><a href="{{route('inserirAgenda')}}">Agenda</a></li>
                                    <li><a href="{{ route('empresas') }}">Empresas</a></li>
                                    <li><a href="{{route('inserirImprensa')}}">Imprensa</a></li>
                                    <li><a href="{{ route('associacoes') }}">Instituições e Associações</a></li>
                                    <li><a href="{{route('inserirHeraldica')}}">Heráldica</a></li>
                                    <li><a href="{{route('inserirHistoria')}}">História</a></li>
                                    <li><a href="{{route('inserirJornal')}}">Jornais</a></li>
                                    <li><a href="">Mensagem do presidente</a></li>
                                    <li><a href="{{route('ondecomer')}}">Onde comer</a></li>
                                    <li><a href="{{route('ondedormir')}}">Onde dormir</a></li>
                                    <li><a href="">Oportunidades</a></li>
                                    <li><a href="{{route('inserirRedeEscolar')}}">Rede escolar</a></li>
                                    <li><a href="{{ route('inserirParoquia') }}">Paróquia</a></li>
                                    <li><a href="{{ route('locais') }}">Locais a visitar</a></li>
                                    <li><a href="{{ route('trilhos') }}">Trilhos</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-university"></i></i><span>Autarquia</span></a>
                                <ul class="collapse">
                                    <li><a href="{{ route('upload-docexec') }}">Executivo</a></li>
                                    <li><a href="{{ route('upload-docAssembleia') }}">Assembleia</a></li>
                                    <li><a href="{{ route('servicos-backoffice') }}">Servicos</a></li>
                                    <li><a href="{{ route('incidentes')}}">Incidentes</a></li>
                                    <li><a href="">Antigos</a></li>
                                    <li><a href="">Funcionários</a></li>
                                    <li><a href="">Plano de atividades</a></li>
                                    <li><a href="">Avisos</a></li>
                                    <li><a href="">Contactos Rodapé</a></li>
                                    <li><a href="">Contactos</a></li>
                                    <li><a href="">Diversos</a></li>
                                    <li><a href="">Documentos previsionais</a></li>
                                    <li><a href="">Editais</a></li>
                                    <li><a href="">Horário</a></li>
                                    <li><a href="">Informação Trismestral</a></li>
                                    <li><a href="">Infraestruturas</a></li>
                                    <li><a href="">Normas</a></li>
                                    <li><a href="{{route('noticiasBackoffice')}}">Notícias</a></li>
                                    <li><a href="">Relatório de contas</a></li>
                                    <li><a href="">Programas e iniciativas</a></li>
                                    <li><a href="">Protocolos e parcerias</a></li>
                                    <li><a href="">Qualidade</a></li>
                                    <li><a href="">Regimento</a></li>
                                    <li><a href="">Regulamentos</a></li>
                                    <li><a href="">Requerimentos</a></li>
                                    <li><a href="{{route('orgaosBackoffice')}}">Órgãos da autarquia</a></li>
                                    
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-university"></i><span>Orçamento participativo</span></a>
                                <ul class="collapse">
                                    <li><a href="">Sobre</a></li>
                                    <li><a href="">Como participar</a></li>
                                    <li><a href="">Propostas</a></li>
                                    <li><a href="">Áreas Temáticas</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-sticky-note"></i><span>Página inicial</span></a>
                                <ul class="collapse">
                                    <li><a href="">Slider</a></li>
                                    <li><a href="">Links imagens</a></li>
                                    <li><a href="">Links úteis</a></li>
                                    <li><a href="">Estatísticas</a></li>
                                </ul>
                            </li>
            
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-cogs"></i> <span>Configurações</span></a>
                                <ul class="collapse">
                                    <li><a href="">Página inicial</a></li>
                                    <li><a href="">Balcão virtual/Incidentes</a></li>
                                    <li><a href="">Footer</a></li>
                                    <li><a href="">Menu</a></li>
                                    <li><a href="">App</a></li>
                                    <li><a href="">Categorias</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('slider') }}"><i class="fa fa-user-plus"></i><span>Slider</span></a></li>
                            <li><a href="{{ route('utilizadores') }}"><i class="fa fa-user-plus"></i><span>Utilizadores</span></a></li>
                            <li><a href=""><i class="fa fa-plus-circle"></i> <span>SubMenus Dinâmicos</span></a></li>
                            <li><a href=""><i class="fa fa-users"></i> <span>Cidadãos</span></a></li>
                            <li><a href=""><i class="fa fa-book"></i> <span>Livro de reclamações</span></a></li>
                            <li><a href="{{route('inserirFaqs')}}"><i class="fa fa-question"></i> <span>Faqs</span></a></li>
                            <li><a href=""><i class="fa fa-folder"></i> <span>Ficheiros</span></a></li>
                            <li><a href="{{route('inserirGaleria')}}"><i class="fa fa-camera"></i> <span>Galeria</span></a></li>
                            <li><a href=""><i class="fa fa-list"></i> <span>Lista de atividades</span></a></li>
                            <li><a href=""><i class="fa fa-map-marker"></i> <span>Locais de voto</span></a></li>
                            <li><a href="{{route('contactosGeraisBackoffice')}}"><i class="fa fa-id-card"></i> <span>Contactos gerais</span></a></li>
                            <li><a href=""><i class="fa fa-user-plus"></i><span>Gerir utilizadores</span></a></li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>