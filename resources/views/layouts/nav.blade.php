
            <header class="header">
                <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
                    <i class="zmdi zmdi-menu"></i>
                </div>

                <div class="logo hidden-sm-down">
                    <h1><a href="index.html">{{ config('app.name', 'Laravel') }}</a></h1>
                </div>

                <form class="search">
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                        <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
                    </div>
                </form>

                <ul class="top-nav">
                    <li class="hidden-xl-up"><a href="" data-sa-action="search-open"><i class="zmdi zmdi-search"></i></a></li>
                    <li class="dropdown hidden-xs-down">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="row app-shortcuts">
                              @if (Route::has('login'))
                                        @auth
                                            <a class="col-4 app-shortcuts__item" href="{{ url('/home') }}">
                                            <i class="zmdi zmdi-home zmdi-hc-fw"></i>
                                                <small class="">Principal</small>
                                            </a>
                                            <div class="col-4 app-shortcuts__item">
                                                <a class="col-4 app-shortcuts__item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                <i class="zmdi zmdi-key"></i>
                                                <small class="">salir</small>
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>   
                                            </div>
                                            <a class="col-4 app-shortcuts__item" href="">
                                                <i class="zmdi zmdi-file-text"></i>
                                                <small class="">Files</small>
                                            </a>
                                            <a class="col-4 app-shortcuts__item" href="">
                                                <i class="zmdi zmdi-email"></i>
                                                <small class="">Email</small>
                                            </a>
                                            <a class="col-4 app-shortcuts__item" href="">
                                                <i class="zmdi zmdi-trending-up"></i>
                                                <small class="">Reports</small>
                                            </a>
                                            <a class="col-4 app-shortcuts__item" href="">
                                                <i class="zmdi zmdi-view-headline"></i>
                                                <small class="">News</small>
                                            </a>
                                        @else
                                            <a class="col-4 app-shortcuts__item" href="{{ route('login') }}">
                                                <i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>
                                                <small class="">Ingresar Al Sistema</small>
                                            </a>
                                            <a class="col-4 app-shortcuts__item" href="{{ route('login') }}">
                                                <i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>
                                                <small class="">Niños Encontrados</small>
                                            </a>
                                            <a class="col-4 app-shortcuts__item" href="{{ route('login') }}">
                                                <i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>
                                                <small class="">Mascotas Encontradas</small>
                                            </a>
                                        @endauth
                                @endif
                                
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="" data-toggle="dropdown" class="top-nav__notify"><i class="zmdi zmdi-key"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="dropdown-header">
                                salir del sistema

                                <div class="actions">
                                    <a class="actions__item zmdi zmdi-lock-outline" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>   
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="clock hidden-md-down">
                    <div class="time" id="reloj">
                        <span class="time__hours" id='hora'></span>
                        <span class="time__min" id='minuto'></span>
                        <span class="time__sec" id='segundo'></span>
                    </div>
                </div>

            </header>
            <script type="text/javascript">
                    Reloj();
                    function Reloj() {
                    var tiempo = new Date();
                    var hora = tiempo.getHours();
                    var minuto = tiempo.getMinutes();
                    var segundo = tiempo.getSeconds();
                    document.getElementById('hora').innerHTML = hora;
                    document.getElementById('minuto').innerHTML = minuto;
                    document.getElementById('segundo').innerHTML = segundo;
                    setTimeout('Reloj()', 1000);
                    str_hora = new String(hora);
                    if (str_hora.length == 1) {
                    document.getElementById('hora').innerHTML = '0' + hora;
                    }
                    str_minuto = new String(minuto);
                    if (str_minuto.length == 1) {
                    document.getElementById('minuto').innerHTML = '0' + minuto;
                    }
                    str_segundo = new String(segundo);
                    if (str_segundo.length == 1) {
                    document.getElementById('segundo').innerHTML = '0' + segundo;
                    }
                    }
            </script>