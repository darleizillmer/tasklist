<!-- ============================================================== -->
<!-- Topbar -->
<!-- ============================================================== -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item hidden-sm-down search-box">
                    <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search" onsubmit="javascript:alert('Não seja teimoso(a), essa funcionalidade ainda não existe!')">
                        <input type="text" class="form-control" placeholder="Procurar (indisponível na Beta)"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                </li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                        <ul>
                            <li>
                                <div class="drop-title">{{ __('Notificações') }}</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="javascript:aviso();">
                                        <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                        <div class="mail-contnet">
                                            <h5>{{ __('Corrigir Menu') }}</h5> <span class="mail-desc">{{ __('Verificar Bugs Reportados') }}</span> <span class="time">{{  __('24/04/2019') }}</span> </div>
                                    </a>
                                    <a href="javascript:aviso();">
                                        <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                        <div class="mail-contnet">
                                            <h5>{{ __('Corrigir Admin') }}</h5> <span class="mail-desc">{{ __('Verificar Bugs Reportados') }}</span> <span class="time">{{  __('24/04/2019') }}</span> </div>
                                    </a>
                                    <a href="javascript:aviso();">
                                        <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                        <div class="mail-contnet">
                                            <h5>{{ __('Configurar Sistema') }}</h5> <span class="mail-desc">{{ __('Configurar Funcionalidades do Sistema') }}</span> <span class="time">{{  __('24/04/2019') }}</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center" href="javascript:aviso();"> <strong>{{ __('Ver Todas Notificações') }}</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- Perfil -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('assets/images/default.png')}}" alt="user" class="profile-pic" /></a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-text">
                                        <h4>{{ Auth::user()->name }}</h4>
                                        <p class="text-muted">{{ Auth::user()->email }}</p></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:aviso();"><i class="ti-user"></i> {{ __('Meu Perfil') }}</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:aviso();"><i class="ti-settings"></i> {{ __('Configurações') }}</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="javascript:onclick($('#logout-form').submit());"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- Fim Topbar -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Sidebar -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="has-arrow" href="javascript:aviso();" aria-expanded="false">
                        <i class="mdi mdi-gauge"></i><span class="hide-menu"> {{ __('Dashboard') }} </span></a>
                </li>
                <li>
                    <a class="has-arrow " href="javascript:aviso();" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">{{ __('Projetos') }}</span></a>
                </li>
                <li class="three-column">
                    <a class="has-arrow" href="javascript:aviso();" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">{{ __('Equipes') }}</span></a>
                </li>
                <li class="nav-devider"></li>
            </ul>
        </nav>
    </div>
</aside>
<!-- ============================================================== -->
<!-- Fim Sidebar -->
<!-- ============================================================== -->
