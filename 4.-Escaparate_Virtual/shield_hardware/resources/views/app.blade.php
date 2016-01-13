<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Shield Hardware</title>
        <meta name="description" content="Tienda de componentes informaticos">
        <meta name="keywords" content="hardware,componentes, ordenador, equipo,
        memoria, cpu, ram, portatil, fuente, alimentación, disco duro, hdd,
        ssd, pendrive, teclado, raton">
        <meta name="keywords" content="hardware,componentes, ordenadores, equipos">
        <meta name="author" content="David_Villaluenga">
        <link rel="icon" href="{{ asset('favicon.png') }}" sizes="16x16" type="image/png">
        <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/screen960.css') }}">
        <script src="{{ asset('/js/prefixfree.min.js') }}"></script>
        <script src="{{ asset('/js/jquery-1.11.3.min.js') }}"></script>
        <script src="{{ asset('/js/main.js') }}"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <main>
        <header>
            <figure id="logo">
                <img src="{{ asset('/img/logo.png') }}" alt="Shield Hardware Logo">
            </figure>
            <div id="marca">
                <h1>Shield</h1>
                <h2 class = "marca_h2">Hardware</h2>
            </div>
            <section id = "login">
                    @if (Auth::guest())
                        <figure class="no_log">
                            <img src="{{ asset('/img/photo243.png') }}" alt="foto de usuario">
                            <figcaption>
                                <ul>
                                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                                    <li><a href="{{ url('/auth/register') }}">Registrarse</a></li>
                                </ul>
                            </figcaption>
                         </figure>
                    @else
                        <figure class="with_log">
                                <img src="{{ asset('/img/user.png') }}" alt="foto de usuario">
                                <figcaption>
                                    <ul>
                                        <li class="name_user"><a href="#">{{ Auth::user()->email }}</a></li>
                                        <li class="parent"><img src="{{ asset('/img/down_hover.png') }}" alt="flecha">
                                            <ul class="sub-nav">
                                                <li><a href="{{ url('/auth/logout') }}">Cerrar Sesión</a></li>
                                                <li><a href="{{ url('/profile/users/' . Auth::user()->id) }}">Editar Perfil</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </figcaption>
                        </figure>
                    @endif            
            </section>
        </header>
        <nav>
                <ul>
                    <li class="menu"><a href="{{ url('/') }}">Inicio</a></li>
                    <li class="menu parent2">Productos
                        <ul class="sub-nav2">
                            @foreach($category as $type) 
                            <li><a href="{{ url('/categories/products/' . $type->id) }}">{{ $type->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu parent3">Buscar
                        <ul class="sub-nav3">
                            <li>
                                <form action="/categories/search" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" placeholder="Buscar" name="search">
                                    <button type="submit" class="btn btn-default">
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                    <figure id="banner">
                       
                        <img class="imagen1" src="{{ asset('/img/img_transformada.png') }}" alt="publicidad">
                        <img class="imagen2" src="{{ asset('/img/banner-intel.png') }}" alt="publicidad">
                        <img class="imagen3" src="{{ asset('/img/banner_amd.png') }}" alt="publicidad">
                        <img class="imagen4" src="{{ asset('/img/baner-gigabyte.png') }}" alt="publicidad">
                        <img class = "absolute izquierda" src="{{ asset('/img/flecha_banner.png') }}" alt="flecha dcha">
                         <img class = "absolute derecha" src="{{ asset('/img/flecha_banner.png') }}" alt="flecha izda">
                    </figure>
            </nav>
            @yield('content')
             
            <footer>
                <section>
                    <ul>
                        <li>Sobre nosotros</li>
                        <li>Quienes somos</li>
                        <li>Aviso legal</li>
                        <li>Política de privacidad</li>
                        <li>Política de cookies</li>
                    </ul>
                    <ul>
                        <li>Condiciones de compra</li>
                        <li>Condiciones generales</li>
                        <li>Condiciones de envio</li>
                        <li>Formas de pago</li>
                        <li>Garantías y devoluciones</li>
                    </ul>
                    <ul>
                        <li>Contáctanos</li>
                        <li>Contacto</li>
                        <li>Atención al cliente</li>
                        <li>Soporte online</li>
                        <li>Asistencia técnica</li>
                    </ul>
                </section>
                <section id="contacto">
                    <figure>
                        <figcaption>
                            Síguenos
                        </figcaption>
                        <div class="facebook"><a href="#" ></a></div>
                        <a class="twitter" href="#" ></a>
                        <a class="google" href="#" ></a>
                    </figure>
                    <article class="marca">
                        <h2>Shield</h2>
                        <h3>hardware</h3>
                    </article>
                    <figure>
                        <figcaption>
                            Pago seguro
                        </figcaption>
                        <img src="{{ asset('/img/tarjetas.png') }}" alt="tarjetas bancarias">
                    </figure>
                </section>
            </footer>
    </main>
	<!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
