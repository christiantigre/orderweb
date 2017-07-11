<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a href="#" class="brand">
                <img src="{{ url('img/web/textprintgrafic.png') }}" width="120" height="40" alt="Logo" />
                <!-- This is website logo -->
            </a>
            <!-- Navigation button, visible on small resolution -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <i class="icon-menu"></i>
            </button>
            <!-- Main navigation -->


            <div class="nav-collapse collapse pull-right">
                <ul class="nav" id="top-navigation">
                    <li class="active"><a href="#home">Inicio</a></li>
                    <li><a href="#service">Demostraciones</a></li>
                    <li><a href="#portfolio">Galeria</a></li>
                    <li><a href="#about">Nosotros</a></li>
                    <li><a href="#clients">Clientes</a></li>
                    <li><a href="#contact">Contacto</a></li>   
                    @if (Auth::guest())
                    <li class="has-dropdown"><a href=""><span class="pull-right-container"><i class="fa fa-fw fa-user"></i></span>Cuenta</a>
                        <ul id="sub-menu" class="sousMenu dropdown">
                            <li><a href="{{ url('/login') }}" class="tag-a"><span class="pull-right-container"><i class="fa fa-fw fa-lock"></i></span>Iniciar</a></li>
                            <li><a href="{{ url('/register') }}" class="tag-a"><span class="pull-right-container"><i class="fa fa-fw fa-user-plus"></i></span>Registrar</a></li>
                        </ul>
                    </li>
                    @else
                    <!-- User Account Menu -->
                    <li class="has-dropdown" id="user_menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            @if( (Auth::user()->perfil) == "")
                            <img src="{{ Gravatar::get($user->email) }}"   class="avatar user-image" alt="User Image"/>
                            @else
                            <img src="{{ Auth::user()->perfil }}" class="avatar user-image" alt="User Image"/>
                            @endif
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            <ul id="sub-menu" class="sousMenu dropdown">
                                <li><a href="{{ url('/settings') }}" class="tag-a"><span class="pull-right-container"><i class="fa fa-fw fa-user"></i></span>{{ trans('adminlte_lang::message.profile') }}</a>
                                </li>
                                <li><a href="{{ url('/logout') }}" class="tag-a" id="logout"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><span class="pull-right-container"><i class="fa fa-fw fa-power-off"></i></span>
                                    {{ trans('adminlte_lang::message.signout') }}

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="submit" value="logout" style="display: none;">
                                    </form>

                                </div>

                            </a>
                            <li>
                            </ul>

                        </li>
                        @endif
                    </ul>
                </div>

            </div>
        </div>
    </div>