<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Restaurant</title>
    <link href= "css/mdb.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href= "css/bootstrap.min.css" rel="stylesheet">
    <link href= "css/style.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    
    <!-- Template styles -->
    <style rel="stylesheet">
    /* TEMPLATE STYLES */
    /* Necessary for full page carousel*/

    html,
    body {
        height: 100%;
    }
    /* Navigation*/

    .navbar {
        background-color: transparent;
    }

    .top-nav-collapse {
        background-color: #ef8c13;
    }

    footer.page-footer {
        background-color: #ef8c13;
    }

    @media only screen and (max-width: 768px) {
        .navbar {
            background-color: #4285F4;
        }
    }

    .scrolling-navbar {
        -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
        -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
        transition: background .5s ease-in-out, padding .5s ease-in-out;
    }
    /* Carousel*/

    .carousel {
        height: 50%;
    }

    @media (max-width: 776px) {
        .carousel {
            height: 100%;
        }
    }

    .carousel-item,
    .active {
        height: 100%;
    }

    .carousel-inner {
        height: 100%;
    }
    /*Caption*/

    .flex-center {
        color: #fff;
    }
    .navbar .btn-group .dropdown-menu a:hover {
        color: #000 !important;
    }
    .navbar .btn-group .dropdown-menu a:active {
        color: #fff !important;
    }
</style>

</head>

<body>


    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link otra-letra" href="{{ URL::to('home') }}">Home </a>
                </li>
                <li class="nav-item btn-group">
                    <a class="nav-link otra-letra dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorías
                    </a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <?php
                            $categorias = DB::table('menu_categorias')->get();
                        ?>
                        @foreach($categorias as $categ)
                            <a class="dropdown-item otra-letra" href="{{ URL::to('categorias/'.$categ->nombre_categoria) }}">{{ $categ->nombre_categoria }}</a>
                        @endforeach
                        <!--<a class="dropdown-item otra-letra" href="#">Action</a>
                        <a class="dropdown-item otra-letra" href="#">Another action</a>
                        <a class="dropdown-item otra-letra" href="#">Something else here</a>-->
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link otra-letra" href="{{ URL::to('conocenos') }}">Conócenos</a>
                </li>
                <li class="nav-item otra-letra">
                    <a class="nav-link otra-letra" href="{{ URL::to('historia') }}">Historia</a>
                </li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Buscar'"  aria-label="Search">
            </form>
        </div>
    </div>
</nav>
<!--/.Navbar-->

<!--Carousel Wrapper-->
<div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-3" data-slide-to="1"></li>
        <li data-target="#carousel-example-3" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!-- First slide -->
        <div class="carousel-item active view hm-black-light" style="background-image: url('images/Banner/bannercomida1.png'); background-repeat: no-repeat; background-size: cover;">
            <!-- Caption -->
            <div class="full-bg-img flex-center white-text">
                <ul class="animated fadeIn col-md-12">
                    <li>
                        <br><br>
                        <h1 class="h1-responsive">Restaurante EcoComidaComputadora AC</h1>
                    </li>
                    <li>
                        <p class="">El mejor restaurante de comida en todo México, Kanto, Ciudad Gótica, Asia y Júpiter.</p>
                    </li>
                    <li>
                        <a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-info btn-lg" rel="nofollow">Éntrele!</a>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!--/.First slide-->

        <!-- Second slide -->
        <div class="carousel-item view hm-black-light" style="background-image: url('images/Banner/bannercomida2.png'); background-repeat: no-repeat; background-size: cover;">

            <!-- Caption -->
            <div class="full-bg-img flex-center white-text">
                <ul class="animated fadeIn col-md-12">
                    <br><br>
                    <li>
                        <h1 class="h1-responsive">UNA sola razón para que usted deguste nuestra comida: ¡Está deliciosa!</h1>
                    </li>
                    <li>
                        <p>¡La mejor comida de la región!</p>
                    </li>
                    <li>
                        <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-info btn-lg" rel="nofollow">Éntrele!</a>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!--/.Second slide -->

        <!-- Third slide -->
        <div class="carousel-item view hm-black-light" style="background-image: url('images/Banner/bannercomida3.png'); background-repeat: no-repeat; background-size: cover;">

            <!-- Caption -->
            <div class="full-bg-img flex-center white-text">
                <ul class="animated fadeIn col-md-12">
                    <br><br>
                    <li>
                        <h1 class="h1-responsive">Comida de fin de semana - La mejor opción para no cocinar.</h1>
                    </li>
                    <li>
                        <p>Ven y disfruta del menudo y del pozole mañanero.</p>
                    </li>
                    <li>
                        <a target="_blank" href="https://mdbootstrap.com/forums/forum/support/" class="btn btn-info btn-lg" rel="nofollow">Éntrele!</a>
                    </li>
                </ul>
            </div>
            <!-- /.Caption -->

        </div>
        <!--/.Third slide-->
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<br>

<!--Content-->
<div class="container"><div class="container">
    </br>
    <h1 align="center">Misión</h1>
    </br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi congue, est non venenatis facilisis, ante tellus sodales risus, id scelerisque orci ante eget est. Sed placerat, magna ac tristique rutrum, erat nibh tempor mi, id ultrices lectus metus at odio. Proin vel dolor sed urna commodo rutrum. Maecenas fermentum orci a neque hendrerit, sed hendrerit sapien vehicula. Nulla feugiat orci tempus blandit laoreet. Morbi non dolor at nulla varius tristique sit amet at augue. Sed est diam, vestibulum consequat ante eu, blandit viverra orci. Duis neque odio, feugiat nec leo at, scelerisque dictum libero. </p>
    </br>
    <h1 align="center">Valores</h1>
    </br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi congue, est non venenatis facilisis, ante tellus sodales risus, id scelerisque orci ante eget est. Sed placerat, magna ac tristique rutrum, erat nibh tempor mi, id ultrices lectus metus at odio. Proin vel dolor sed urna commodo rutrum. Maecenas fermentum orci a neque hendrerit, sed hendrerit sapien vehicula. Nulla feugiat orci tempus blandit laoreet. Morbi non dolor at nulla varius tristique sit amet at augue. Sed est diam, vestibulum consequat ante eu, blandit viverra orci. Duis neque odio, feugiat nec leo at, scelerisque dictum libero. </p>
    </br>
    <h1 align="center">Acerca de</h1> 
    </br>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi congue, est non venenatis facilisis, ante tellus sodales risus, id scelerisque orci ante eget est. Sed placerat, magna ac tristique rutrum, erat nibh tempor mi, id ultrices lectus metus at odio. Proin vel dolor sed urna commodo rutrum. Maecenas fermentum orci a neque hendrerit, sed hendrerit sapien vehicula. Nulla feugiat orci tempus blandit laoreet. Morbi non dolor at nulla varius tristique sit amet at augue. Sed est diam, vestibulum consequat ante eu, blandit viverra orci. Duis neque odio, feugiat nec leo at, scelerisque dictum libero.

Nullam sodales turpis convallis lorem viverra, eu gravida augue ultricies. Etiam a iaculis eros. Mauris vel placerat massa. Mauris a mi sodales turpis varius mattis vel at nibh. Quisque id hendrerit augue. Quisque interdum est eu accumsan laoreet. Etiam tincidunt varius malesuada. Proin viverra quam augue, vitae blandit libero sodales quis. Praesent interdum turpis a justo efficitur, eget sodales lorem venenatis. Nulla vel convallis purus. Etiam ultricies accumsan orci, ut luctus ligula molestie sed. Fusce dictum libero ut ante commodo, nec maximus ipsum scelerisque.

Maecenas nec elit lacinia metus imperdiet dapibus. Sed elementum tempus viverra. Ut eu diam nec nisi dignissim blandit id vel velit. Vivamus sit amet dolor augue. Sed sit amet lectus sit amet nibh ultricies pellentesque. Vestibulum lobortis ultrices feugiat. Nunc imperdiet dolor at dui tristique vehicula. </p>
    </br>
</div></div>
<!--/.Content-->
<!--Footer-->
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-lg-3 col-md-6 ml-auto">
                <h5 class="title font-bold mt-3 mb-4">ABOUT MATERIAL DESIGN</h5>
                <p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>

                <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS,
                and JS framework - Bootstrap.</p>
            </div>
            <!--/.First column-->

            <hr class="w-100 clearfix d-sm-none">

            <!--Second column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <h5 class="title font-bold mt-3 mb-4">Recent Trips</h5>
                <ul>
                    <li><a href="#!">Balkans</a></li>
                    <li><a href="#!">Tatra Mountains</a></li>
                    <li><a href="#!">Norway Fjords</a></li>
                    <li><a href="#!">Baikal Lake</a></li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="w-100 clearfix d-sm-none">

            <!--Third column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <h5 class="title font-bold mt-3 mb-4">My guest articles</h5>
                <ul>
                    <li><a href="#!">"Things I learn on the road"</a></li>
                    <li><a href="#!">"Low-budget traveling made simple"</a></li>
                    <li><a href="#!">"Talking with locals"</a></li>
                    <li><a href="#!">"Leaving things behind"</a></li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="w-100 clearfix d-sm-none">

            <!--Fourth column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <h5 class="title font-bold mt-3 mb-4">Síguenos en:</h5>
                <ul>
                    <li><a href="#!">Facebook</a></li>
                    <li><a href="#!">Instagram</a></li>
                    <li><a href="#!">Twitter</a></li>
                    <li><a href="#!">Pinterest</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!--Call to action-->
        <!--<div class="call-to-action">
            <h4 class="mb-5">Material Design for Bootstrap</h4>
            <ul>
                <li>
                    <h5>Get our UI KIT for free</h5>
                </li>
                <li><a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-info" rel="nofollow">Sign up!</a></li>
                <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default" rel="nofollow">Learn more</a></li>
            </ul>
        </div>-->
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright: <a href="https://www.eqsolutions.com.mx"> eq-solutions.com.mx </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        new WOW().init();
    </script>

</body>

</html>