<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Recursos Humanos - Municipalidad D. de Lucre</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ url('') }}/inicio/style.css">

</head>

<body>
    {{-- <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> --}}

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    @if (Route::has('login'))
                                    @auth
                                        <li> <a href="{{ url('/admin/home') }}" >Administrador </a></li>
                                    @else
                                        <li><a href="{{ route('login') }}" >Inicio de Sesion</a></li>
                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}" >Registro de Usuario</a></li>
                                        @endif
                                    @endauth
                                    @endif
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url({{ url('') }}/demo2/dist/assets/media/bg/bg-10.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Plataforma</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Recursos Humanos</h2>
                                @if (Route::has('login'))
                                    @auth
                                        <a data-animation="fadeInUp" data-delay="500ms" href="{{ url('/admin/home') }}" class="btn oneMusic-btn mt-50">Administrador <i class="fa fa-angle-double-right"></i></a>
                                    @else
                                        <a data-animation="fadeInUp" data-delay="500ms" href="{{ route('login') }}" class="btn oneMusic-btn mt-50">Inicio de Sesion <i class="fa fa-angle-double-right"></i></a>

                                    @if (Route::has('register'))
                                        <a data-animation="fadeInUp" data-delay="500ms" href="{{ route('register') }}" class="btn oneMusic-btn mt-50"> Registro de Usuario <i class="fa fa-angle-double-right"></i></a>

                                        @endif
                                    @endauth
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url({{ url('') }}/demo2/dist/assets/media/bg/bg-10.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Plataforma</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Recursos Humanos</span></h2>
                                @if (Route::has('login'))
                                @auth
                                    <a data-animation="fadeInUp" data-delay="500ms" href="{{ url('/admin/home') }}" class="btn oneMusic-btn mt-50">Administrador <i class="fa fa-angle-double-right"></i></a>
                                @else
                                    <a data-animation="fadeInUp" data-delay="500ms" href="{{ route('login') }}" class="btn oneMusic-btn mt-50">Inicio de Sesion <i class="fa fa-angle-double-right"></i></a>

                                @if (Route::has('register'))
                                    <a data-animation="fadeInUp" data-delay="500ms" href="{{ route('register') }}" class="btn oneMusic-btn mt-50">Registro de Usuario<i class="fa fa-angle-double-right"></i></a>

                                    @endif
                                @endauth
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ url('') }}/inicio/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{ url('') }}/inicio/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{ url('') }}/inicio/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{ url('') }}/inicio/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="{{ url('') }}/inicio/js/active.js"></script>
</body>

</html>

